<?php

namespace App\Domains\Newsletter\Mail;

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
        return new Content(
            view: 'view.name',
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
