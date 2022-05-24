<?php

use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\OfferController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\ProjectController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\MortagageController;
use App\Http\Controllers\User\MyAccountController;
use App\Http\Controllers\User\WhyHsquareController;
use App\Http\Controllers\User\WhyInDubaiController;
use App\Http\Controllers\User\SellerGuideController;

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

Route::get('/', function () {
    return redirect('/in');
});

Route::group(['prefix' => 'in'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('offer', [OfferController::class, 'index']);
    Route::get('project', [ProjectController::class, 'index']);
    Route::get('mortagage-assist', [MortagageController::class, 'index']);
    Route::get('why-hsquare', [WhyHsquareController::class, 'index']);
    Route::get('seller-guide', [SellerGuideController::class, 'index']);

    Route::get('contact', [ContactController::class, 'index']);
    Route::get('register', [RegisterController::class, 'index']);
    Route::get('login', [LoginController::class, 'index']);
    Route::get('my-account', [MyAccountController::class, 'index']);
    Route::get('wishlist', [WishlistController::class, 'index']);
    
});

Route::group(['prefix' => 'uae'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('why-in-dubai', [WhyInDubaiController::class, 'index']);
    Route::get('offer', [OfferController::class, 'index']);
    Route::get('project', [ProjectController::class, 'index']);
    Route::get('mortagage-assist', [MortagageController::class, 'index']);
    Route::get('why-hsquare', [WhyHsquareController::class, 'index']);
    Route::get('seller-guide', [SellerGuideController::class, 'index']);
    Route::get('contact', [ContactController::class, 'index']);
    Route::get('register', [RegisterController::class, 'index']);
    Route::get('login', [LoginController::class, 'index']);
    Route::get('my-account', [MyAccountController::class, 'index']);
    Route::get('wishlist', [WishlistController::class, 'index']);
});
