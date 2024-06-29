<?php

namespace App\Domains\Newsletter\Http;

use App\Models\Newsletter\NewsletterConsent;
use App\Models\Newsletter\NewsletterContent;

trait NewsletterTrait
{
    //
    public function replaceSpecialStrings($content, NewsletterConsent $consent = null)
    {
        if( $consent) {
            $email = $consent->email;
            setAllLocale($consent->locale);
        } else {
            $email = auth()->user()->email ?? null;
        }
   
        $arrayOfValues = [
            '{{unsubscribe_content}}' => $this->generateUnsubscribeContent(),
            '{{unsubscribe_link}}' => $this->generateUnsubscribeLink($email),
            '{{unsubscribe_word}}' => __('unsubscribe_word'),
            '{{unsubscribe_before}}' => __('unsubscribe_before'),
            '{{unsubscribe_after}}' => __('unsubscribe_after'),
        ];

        foreach ($arrayOfValues as $key => $value) {
            $content = str_replace($key, $value, $content);
        }

        return $content;

    }

    public function generateUnsubscribeLink($email) {
        
        $email = encrypt($email);
        return route('unregister_email_for_newsletter',['token' => $email]);
    }

    public function generateUnsubscribeContent() {
        return '{{unsubscribe_before}} <a href="{{unsubscribe_link}}">{{unsubscribe_word}}</a> {{unsubscribe_after}}';
    }
}
