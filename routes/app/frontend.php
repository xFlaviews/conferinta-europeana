<?php

use App\Domains\Newsletter\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');

Route::post('/newsletter', [NewsletterController::class, 'registerEmailForNewsletter'])->name('register_email_for_newsletter');
Route::get('/delete-newsletter', [NewsletterController::class, 'unregisterEmailFromNewsletter'])->name('unregister_email_for_newsletter');
