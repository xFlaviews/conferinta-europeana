<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Spatie\Translatable\HasTranslations;

class NewsletterContent extends Model
{
    use HasFactory;
    use HasTranslations;
    
    protected $guarded = ['id'];
    
    public $translatable = ['subject', 'formatted_content','unformatted_content'];
}
