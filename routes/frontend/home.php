<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\ExplorerController;
use App\Http\Controllers\Frontend\MyCartController;
use App\Http\Controllers\Frontend\User\PurchaseHistoryController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about_us', [HomeController::class, 'abouts_us'])->name('about_us');
Route::get('/explore/{genres}/{author_name}/{duration}/{price}/{music_name}', [ExplorerController::class, 'index'])->name('explorer');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::post('cart/addtocart', [HomeController::class, 'addCart'])->name('cart.add');
Route::get('cart/removecart/{cart_item}', [HomeController::class, 'removeCart'])->name('cart.remove');
Route::post('search_query', [HomeController::class, 'search_query'])->name('search_query.index');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('my_cart', [MyCartController::class, 'index'])->name('my_cart');
        Route::get('checkout',[MyCartController::class, 'checkout_finish'])->name('checkout_finish');
        Route::get('dashboard', [MyCartController::class, 'index'])->name('my_cart');
        Route::get('purchase_history', [PurchaseHistoryController::class, 'index'])->name('purchase_history');


        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
