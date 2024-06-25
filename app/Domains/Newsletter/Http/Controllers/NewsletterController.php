<?php

namespace App\Domains\Newsletter\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter\NewsletterConsent;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Newsletter\NewsletterContent;
use App\Models\Newsletter\NewsletterSent;
use Illuminate\Validation\Rule;

class NewsletterController extends Controller
{
    //


    // 
    public function registerEmailForNewsletter()
    {
        request()->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        $email = request('email');

        $userByEmail = User::where('email', $email)->first();

        $guest = Guest::where('email', $email)->first();

        $registerd = NewsletterConsent::updateOrCreate(
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
            'successMessage' => __('Fai quello che vuoi con questo messaggio, poi dimmi dove metterlo quando va a bun fine ..')
        ]);
    }


    public function unregisterEmailFromNewslettere()
    {
        request()->validate([
            'email' => ['required', 'email'],
        ]);

        $email = request('email');

        $newsletterByEmail = NewsletterConsent::where('email', $email)->first();

        if ($newsletterByEmail) {
            $newsletterByEmail->consent = false;
            $newsletterByEmail->save();
        }
        dd('da definire risposta');
    }


    public function index()
    {
        $newsletters = NewsletterContent::paginate();
        return view('backend.pages.newsletter.index', [
            "newsletters" => $newsletters
        ]);
    }

    public function show(NewsletterContent $newsletterContent) {

    }

    public function create() {
        return view('backend.pages.newsletter.create');
    }

    public function save() {
        request()->validate([
            'for' => ['required','string', Rule::in(['guests', 'users', 'all'])],
            'start_sending_at' => ['required','date'],
            'subject' => ['required','array'],
            "subject.ro" => ['required','string'],
            'formatted_content' => ['array','required'],
            'unformatted_content' => ['array','required'],
            'to_be_sent' => ['sometimes']
        ]);

        $subject = [];
        foreach (request('subject') as $key => $value) {
            if(!empty($value)) {
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

        return redirect()->route('backend.newsletter.index')->with('successMessage',);
    }
}
