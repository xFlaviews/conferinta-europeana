<?php

namespace App\Domains\Newsletter\Mail;

use App\Domains\Newsletter\Http\NewsletterTrait;
use App\Models\Newsletter\NewsletterConsent;
use App\Models\Newsletter\NewsletterContent;
use App\Models\Newsletter\NewsletterSent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GenericNewsletter extends Mailable
{
    use Queueable, SerializesModels;
    use NewsletterTrait;

    public NewsletterSent $newsletterToSend;
    public NewsletterContent $content;
    public NewsletterConsent $consent;

    /**
     * Create a new message instance.
     */
    public function __construct(NewsletterSent $newsletterToSend)
    {
        $this->newsletterToSend = $newsletterToSend;
        $this->content = $newsletterToSend->content;
        $this->consent = $newsletterToSend->consent;
        $this->to($this->consent->email);
        $this->from(config('mail.from.address'), config('mail.from.name'));
        setAllLocale($this->consent->locale);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->content->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $htmlContent = $this->content->formatted_content;
        $htmlContent = $this->replaceSpecialStrings($htmlContent, $this->consent);
        return new Content(
            htmlString: $htmlContent,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
