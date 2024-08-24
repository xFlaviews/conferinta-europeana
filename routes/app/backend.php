<?php

use App\Domains\Event\Http\Controllers\EventController;
use App\Domains\Newsletter\Http\Controllers\NewsletterController;
use App\Http\Controllers\GroupController;
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

        Route::group([
            'prefix' => 'event',
            'as' => 'event.',
            'middleware' => ['permission:event.read']
        ], function () {
            Route::get('/',[EventController::class, 'index'])->name('index');
            
            Route::post('/save',[EventController::class, 'save'])->middleware('can:newsletter.create')->name('save');
            Route::post('/{event}/update',[EventController::class, 'update'])->middleware('can:event.update')->name('update');
            Route::post('/{event}/delete',[EventController::class, 'delete'])->middleware('can:event.delete')->name('delete');
            
        });

        Route::group([
            'prefix' => 'group',
            'as' => 'group.',
            'middleware' => ['permission:group.read']
        ], function () {
            Route::get('/',[GroupController::class, 'index'])->name('index');
            
            Route::post('/save',[GroupController::class, 'save'])->middleware('can:newsletter.create')->name('save');
            Route::post('/{group}/update',[GroupController::class, 'update'])->middleware('can:group.update')->name('update');
            //Route::post('/{group}/delete',[GroupController::class, 'delete'])->middleware('can:group.delete')->name('delete');
            
        });

    });

});
