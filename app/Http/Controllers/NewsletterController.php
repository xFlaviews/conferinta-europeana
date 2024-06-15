<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterConsent;
use App\Models\User;

class NewsletterController extends Controller
{
    //


    // 
    public function registerEmailForNewsletter()
    {
        //dd('test');
        //dd($_GET);
        request()->validate([
            'email' => ['required', 'email', 'min:10'],
            'mario' => ['required','min:10']
        ]);

        $email = request('email');

        $userByEmail = User::where('email', $email)->first();

        $registerd = NewsletterConsent::updateOrCreate(
            [
                'email' => $email,
            ],
            [
                'user_id' => $userByEmail->id ?? null,
                'consent' => true,
                'consent_data' => now(),
                'ip' => request()->ip()
            ]
        );



        //dd(request()->ip());
        $registerd = NewsletterConsent::updateOrCreate(
            [
                'email' => $email,
            ],
            [
                #'user_id' => $userByEmail->id ?? null,
                'consent' => true,
                'consent_data' => now(),
                'ip' => request()->ip()
            ]
        );
        dd($registerd);
        //return view('newsletter.success');
    }


    public function unregisterEmailFromNewslettere()
    {
        dd($_GET);
        request()->validate([
            'email' => ['required', 'email']
        ]);

        $email = request('email');

        $newsletterByEmail = NewsletterConsent::where('email', $email)->first();

        if($newsletterByEmail) {
            $newsletterByEmail->consent = false;
            $newsletterByEmail->save();
        }

        dd('success');
        
    }
}
