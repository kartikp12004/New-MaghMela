<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FirmEnquiryController;

/*
|--------------------------------------------------------------------------
| Auth routes (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Static pages
|--------------------------------------------------------------------------
*/
Route::view('/about',   'frontend.pages.about')->name('about');
Route::view('/terms',   'frontend.pages.terms')->name('terms');
Route::view('/refund',  'frontend.pages.refund')->name('refund');
Route::view('/privacy', 'frontend.pages.privacy')->name('privacy');

/*
|--------------------------------------------------------------------------
| General Enquiry form (public)
|--------------------------------------------------------------------------
*/
Route::get('/enquiry', [EnquiryController::class, 'show'])
     ->name('enquiry.show');
Route::post('/enquiry', [EnquiryController::class, 'submit'])
     ->name('enquiry.submit');

/*
|--------------------------------------------------------------------------
| Home & Event registration*****************************************************************************
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'IndexPage'])->name('home');


// Route::get('/post/{id}', [HomeController::class, 'PostPage'])
//      ->name('home.post');
// Route::post('/event-registration', [HomeController::class, 'EventRegistration'])
//      ->name('event.register');

/*
|--------------------------------------------------------------------------
| Public blog listing
|--------------------------------------------------------------------------
*/
Route::get('/posts', [PostController::class, 'index'])
     ->name('posts.index');

/*
|--------------------------------------------------------------------------
| Protected blog actions (only for authenticated users)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Create new post
    Route::get('/posts/create', [PostController::class, 'create'])
         ->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])
         ->name('posts.store');

    // Delete existing post
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])
         ->name('posts.destroy');

    // Breeze profile management*****************************************************************************
    Route::get('/profile', [ProfileController::class, 'edit'])
         ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
         ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
         ->name('profile.destroy');



    // Dashboard (needs verified email)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')
      ->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Public blog detail (keep at bottom so it doesn't override /posts/create)
|--------------------------------------------------------------------------
*/
Route::get('/posts/{id}', [PostController::class, 'show'])
     ->name('posts.show');

/*
|--------------------------------------------------------------------------
| Firm Enquiry (company enquiries)
|--------------------------------------------------------------------------
*/
// Show firm-enquiry form
Route::get('/firm-enquiry', [FirmEnquiryController::class, 'create'])
     ->name('firm-enquiry.create');


// Handle form submit
Route::post('/firm-enquiry', [FirmEnquiryController::class, 'store'])
     ->name('firm-enquiry.store');



// List all firm-enquiries (only for logged-in users)
Route::middleware('auth')->group(function () {
    Route::get('/firm-enquiries', [FirmEnquiryController::class, 'index'])
         ->name('firm-enquiries.index');
});
