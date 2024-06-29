<?php

namespace App\Domains\Newsletter\Jobs;

use App\Domains\Newsletter\Mail\GenericNewsletter;
use App\Models\Newsletter\NewsletterSent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $newsletterToSend = NewsletterSent::where('was_sent',false)->first();
        if($newsletterToSend) {
            if(now() >= $newsletterToSend->to_be_sent_at) {
                Mail::send(new GenericNewsletter($newsletterToSend));
                $newsletterToSend->was_sent = true;
                $newsletterToSend->save();
            }
        }
    
    }
}
