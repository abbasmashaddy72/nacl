<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('', 'FrontendController@index')->name('homepage');
    Route::get('sports', 'FrontendController@sports')->name('sports');
    Route::get('shop', 'FrontendController@shop')->name('shop');
    // Route::get('blog/{slug}', 'FrontendController@blog')->name('blog');
    // Route::get('blog-categories', 'FrontendController@blog-categories')->name('blog-categories');
    // Route::get('blog-category/{slug}', 'FrontendController@blog-category')->name('blog-category');
    Route::get('page/{slug}', 'FrontendController@page')->name('page');
    Route::get('lane-rental', 'FrontendController@laneRental')->name('lane-rental');
    Route::get('training-video', 'FrontendController@trainingVideo')->name('training-video');
    Route::get('about-us', 'FrontendController@aboutUs')->name('about-us');
    Route::get('contact-us', 'FrontendController@contactUs')->name('contact-us');
    Route::get('book-slot', 'FrontendController@bookSlot')->name('book-slot');

    Route::post('payment/webhook', 'StripePaymentController@webhook')->name('stripe.webhook');
    Route::get('payment/success', 'StripePaymentController@success')->name('stripe.success');
    Route::get('payment/cancel', 'StripePaymentController@cancel')->name('stripe.cancel');
});

Route::middleware(['auth:customer', 'verified'])->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/guest-auth.php';
