<?php

namespace App\Domains\Newsletter\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter\NewsletterConsent;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Guest;

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
            'messageSuccess' => __('Fai quello che vuoi con questo messaggio, poi dimmi dove metterlo quando va a bun fine ..')
        ]);
    }


    public function unregisterEmailFromNewslettere()
    {
        request()->validate([
            'email' => ['required', 'email'],
        ]);

        $email = request('email');

        $newsletterByEmail = NewsletterConsent::where('email', $email)->first();

        if($newsletterByEmail) {
            $newsletterByEmail->consent = false;
            $newsletterByEmail->save();
        }
        dd('da definire risposta');
        
    }

    
}
