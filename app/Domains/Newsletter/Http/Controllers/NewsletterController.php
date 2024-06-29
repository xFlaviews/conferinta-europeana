<?php

namespace App\Domains\Newsletter\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter\NewsletterConsent;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Newsletter\NewsletterContent;
use App\Models\Newsletter\NewsletterSent;
use App\Domains\Newsletter\Http\NewsletterTrait;
use App\Domains\Newsletter\Jobs\SendNewsletterJob;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class NewsletterController extends Controller
{
    use NewsletterTrait;
    //


    // 
    public function registerEmailForNewsletter()
    {
        request()->validate([
            'email' => ['required', 'email:rfc,dns', 'max:255'],
        ]);

        $email = request('email');

        $userByEmail = User::where('email', $email)->first();

        $guest = Guest::where('email', $email)->first();

        $registered = NewsletterConsent::updateOrCreate(
            [
                'email' => $email,
            ],
            [
                'user_id' => $userByEmail->id ?? null,
                'guest_id' => $guest->id ?? null,
                'consent' => true,
                'consent_data' => now(),
                'ip' => request()->ip()
            ]
        );

        return redirect()->back()->with([
            'successMessage' => __('You have successfully subscribed to the newsletter')
        ]);
    }


    public function unregisterEmailFromNewsletter()
    {
       
        $email = request('token');

        $email = decrypt($email) ?? '';

        $newsletterByEmail = NewsletterConsent::where('email', $email)->first();

        if ($newsletterByEmail) {
            $newsletterByEmail->consent = false;
            $newsletterByEmail->save();
        }

        return redirect()->route('frontend.index')->with([
            'successMessage' => __('You have successfully unsubscribed')
        ]);
    }


    public function index()
    {
        $newsletters = NewsletterContent::select([
            'id',
            'subject',
            'start_sending_at',
            'for',
            'to_be_sent',
            'created_at',
            'updated_at'
        ])->paginate();

        return view('backend.pages.newsletter.index', [
            "newsletters" => $newsletters
        ]);
    }

    public function show(NewsletterContent $newsletterContent)
    {
        $formattedContent = $newsletterContent->formatted_content;
        $formattedContent = $this->replaceVariables($formattedContent);
        return $formattedContent;
    }

    public function create()
    {
        return view('backend.pages.newsletter.create');
    }

    public function edit(NewsletterContent $newsletterContent)
    {
        return view('backend.pages.newsletter.edit', [
            'newsletterContent' => $newsletterContent
        ]);
    }

    public function save()
    {
        request()->validate([
            'for' => ['required', 'string', Rule::in(['guests', 'users', 'all'])],
            'start_sending_at' => ['required', 'date'],
            'subject' => ['required', 'array'],
            "subject.ro" => ['required', 'string'],
            'formatted_content' => ['array', 'required'],
            'unformatted_content' => ['array', 'required'],
            'to_be_sent' => ['sometimes']
        ]);

        $subject = [];
        foreach (request('subject') as $key => $value) {
            if (!empty($value)) {
                $subject[$key] = $value;
            }
        }

        $toBeSent = request('to_be_sent') == 'on';
        //dd(json_encode($subject));
        $newsletterContent = NewsletterContent::create([
            'for' => request('for'),
            'start_sending_at' => request('start_sending_at'),
            'subject' => $subject,
            'formatted_content' => request('formatted_content'),
            'unformatted_content' => request('unformatted_content'),
            'to_be_sent' => $toBeSent
        ]);

        if($newsletterContent->to_be_sent) {
            $consents = [];
            if(request('for') == 'users') {
                $consents = NewsletterConsent::where('consent', true)->where('user_id','<>',NULL)->get('id');
            } else {
                $consents = NewsletterConsent::where('consent', true)->get('id');
            }

            $newsletterToSend = [];
            
            foreach ($consents as $consent) {
                $newsletterToSend[] = [
                    'newsletter_content_id' => $newsletterContent->id,
                    'newsletter_consent_id' => $consent->id,
                    'to_be_sent_at' => $newsletterContent->start_sending_at,
                    'was_sent' => 0
                ];
            }

            NewsletterSent::upsert($newsletterToSend, ['to_be_sent_at','was_sent']);

            for ($i=0; $i < count($consents) ; $i++) { 
                SendNewsletterJob::dispatch()->onQueue('newsletter');
            }
        }

        return redirect()->route('backend.newsletter.index')->with('successMessage');
    }

    public function update(NewsletterContent $newsletterContent)
    {

        request()->validate([
            'for' => ['required', 'string', Rule::in(['guests', 'users', 'all'])],
            'start_sending_at' => ['required', 'date'],
            'subject' => ['required', 'array'],
            "subject.ro" => ['required', 'string'],
            'formatted_content' => ['array', 'required'],
            'unformatted_content' => ['array', 'required'],
            'to_be_sent' => ['sometimes']
        ]);

        $subject = [];
        foreach (request('subject') as $key => $value) {
            if (!empty($value)) {
                $subject[$key] = $value;
            }
        }

        $toBeSent = request('to_be_sent', $newsletterContent->to_be_sent == 1 ? 'on' : 'off') == 'on';

        $newsletterContent->update([
            'for' => request('for'),
            'start_sending_at' => request('start_sending_at'),
            'subject' => $subject,
            'formatted_content' => request('formatted_content'),
            'unformatted_content' => request('unformatted_content'),
            'to_be_sent' => $toBeSent
        ]);

        if($newsletterContent->to_be_sent) {
            $consents = [];
            if(request('for') == 'users') {
                $consents = NewsletterConsent::where('consent', true)->where('user_id','<>',NULL)->get('id');
            } else {
                $consents = NewsletterConsent::where('consent', true)->get('id');
            }

            $newsletterToSend = [];
            $date = new Carbon($newsletterContent->start_sending_at);
            
            foreach ($consents as $consent) {
                $newsletterToSend[] = [
                    'newsletter_content_id' => $newsletterContent->id,
                    'newsletter_consent_id' => $consent->id,
                    'to_be_sent_at' => $newsletterContent->start_sending_at,
                    'was_sent' => 0
                ];
            }

            NewsletterSent::upsert($newsletterToSend, ['newsletter_content_id','newsletter_consent_id'],['to_be_sent_at']);

            for ($i=0; $i < count($consents) ; $i++) { 
                SendNewsletterJob::dispatch()->onQueue('newsletter');
            }
        } else {
            NewsletterSent::where('newsletter_content_id', $newsletterContent->id)->delete();
        }

        return redirect()->route('backend.newsletter.index')->with('successMessage',);
    }

    public function delete(NewsletterContent $newsletterContent)
    {
        $newsletterContent->delete();
        return redirect()->route('backend.newsletter.index')->with('successMessage',);
    }

    private function replaceVariables($contente)
    {
        return $this->replaceSpecialStrings($contente); 
    }

}
