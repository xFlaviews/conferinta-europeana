<?php

use App\Domains\Newsletter\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'backend.'], function () {


    Route::get('/dashboard', function () {
        return view('backend.index');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/', function () {
        return view('backend.index');
    })->middleware(['auth', 'verified'])->name('index');

    Route::group(['middleware' => ['auth', 'verified']], function () {

        Route::group([
            'prefix' => 'newsletter',
            'as' => 'newsletter.',
            'middleware' => ['permission:newsletter.read']
        ], function () {
            Route::get('/',[NewsletterController::class, 'index'])->name('index');
            Route::get('/{newsletter_content}/show',[NewsletterController::class, 'show'])->name('show');

            Route::get('/create',[NewsletterController::class, 'create'])->middleware('can:newsletter.create')->name('create');
            Route::get('/{newsletter_content}/edit',[NewsletterController::class, 'edit'])->middleware('can:newsletter.update')->name('edit');
            
            Route::post('/save',[NewsletterController::class, 'save'])->middleware('can:newsletter.create')->name('save');
            Route::post('/{newsletter_content}/update',[NewsletterController::class, 'update'])->middleware('can:newsletter.update')->name('update');
            Route::post('/{newsletter_content}/delete',[NewsletterController::class, 'delete'])->middleware('can:newsletter.delete')->name('delete');
            
        });
    });
});
