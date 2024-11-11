<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['GET', 'POST'], '', [AuthController::class, 'login'])->name('website-login');
Route::get('quiz', [HomeController::class, 'index'])->name('website-home');
Route::post('/store-browser-data', [HomeController::class, 'storeBrowserData']);

Route::get('google/login', [HomeController::class, 'googleView'])->name('google-login-view');
Route::get('google/login/callback', [HomeController::class, 'googleCallback'])->name('google-login-callback');
Route::get('user-pay-status',[PaymentController::class,'userPayStatus'])->name('user-payment-status-api');

Route::middleware(['user'])->group(function () {
    Route::get('plan', [HomeController::class, 'plan'])->name('website-plan');

    Route::controller(PaymentController::class)->group(function () {
        Route::get('stripe/checkout', 'stripeCheckout')->name('stripe.checkout');
        Route::get('stripe/checkout/success', 'stripeCheckoutSuccess')->name('stripe.checkout.success');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('plan', [SubscriptionController::class, 'create'])->name('admin-plan');
    Route::post('plan/store', [SubscriptionController::class, 'savePlan'])->name('plan.store');
});
