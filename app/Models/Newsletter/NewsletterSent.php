<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class NewsletterSent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function consent() {
        return $this->belongsTo(NewsletterConsent::class, 'newsletter_consent_id', 'id');
    }

    public function content() {
        return $this->belongsTo(NewsletterContent::class, 'newsletter_content_id', 'id');
    }
}
