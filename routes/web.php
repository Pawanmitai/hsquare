<?php

use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AboutController;
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
    Route::get('about', [AboutController::class, 'index']);
    Route::get('blog-detail', [MortagageController::class, 'blogDetail']);
    Route::get('project-detail', function () {
        return userView('project-detail');
    });
    Route::get('union-tower', function () {
        return userView('union-tower');
    });
    Route::get('gateway', function () {
        return userView('gateway');
    });
    Route::get('elevation', function () {
        return userView('elevation');
    });
    Route::get('service', function () {
        return userView('service');
    });
    
});

Route::group(['prefix' => 'uae'], function () {
    
    Route::get('/', function () {
        return userView('uae/index');
    });
    Route::get('why-in-dubai', function () {
        return userView('uae/why-in-dubai');
    });
    Route::get('offer', function () {
        return userView('uae/offer');
    });
    Route::get('project', function () {
        return userView('uae/project');
    });
    Route::get('mortagage-assist', function () {
        return userView('uae/mortagage-assist');
    });
    Route::get('why-hsquare', function () {
        return userView('uae/why-hsquare');
    });
    Route::get('seller-guide', function () {
        return userView('uae/seller-guide');
    });
    Route::get('contact', function () {
        return userView('uae/contact');
    });
    Route::get('register', function () {
        return userView('uae/register');
    });
    Route::get('login', function () {
        return userView('uae/login');
    });
    Route::get('my-account', function () {
        return userView('uae/my-account');
    });
    Route::get('wishlist', function () {
        return userView('uae/wishlist');
    });
    Route::get('about', function () {
        return userView('uae/about');
    });
    Route::get('blog-detail', function () {
        return userView('uae/blog-detail');
    });

    Route::get('project-detail', function () {
        return userView('uae/project-detail');
    });
    Route::get('union-tower', function () {
        return userView('uae/union-tower');
    });
    Route::get('gateway', function () {
        return userView('uae/gateway');
    });
    Route::get('elevation', function () {
        return userView('uae/elevation');
    });
    Route::get('service', function () {
        return userView('uae/service');
    });

});
