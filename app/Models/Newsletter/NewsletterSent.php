<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class NewsletterSent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
