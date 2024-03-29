<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\ExplorerController;
use App\Http\Controllers\Frontend\MyCartController;
use App\Http\Controllers\Frontend\User\PurchaseHistoryController;
use App\Http\Controllers\Frontend\FavoriteController;
use App\Http\Controllers\Frontend\PurchasedMusicController;
use App\Http\Controllers\Frontend\Auth\UpdatePasswordController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about_us', [HomeController::class, 'abouts_us'])->name('about_us');
Route::get('/refund_policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy');

Route::get('view_license/{name}', [HomeController::class,'view_license'])->name('view_licenses_details');



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
        Route::post('CheckOutFunc', [MyCartController::class, 'CheckOutFunc'])->name('check_out_func');
        Route::get('checkout/{id}/{order_id}',[MyCartController::class, 'checkout_finish'])->name('checkout_finish');
        Route::get('dashboard', [MyCartController::class, 'index'])->name('my_cart');
        Route::get('purchase_history', [PurchaseHistoryController::class, 'index'])->name('purchase_history');


        Route::get('test_mail_function/{id}',[MyCartController::class,'helloword'])->name('test_mail_function');

        Route::get('music_items', [PurchasedMusicController::class, 'index'])->name('purchased_music');
        Route::get('music_items/viiew_invoice/{id}', [PurchaseHistoryController::class, 'view_invoice'])->name('view_invoice');

        Route::get('favorite', [FavoriteController::class, 'index'])->name('favorite');
        Route::get('favorite/delete/{id}', [FavoriteController::class, 'delete'])->name('favorite.delete');



        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        Route::post('update_userDetails', [AccountController::class, 'updateUserDetails'])->name('account.updateUserDetails');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('purchase_error', [MyCartController::class, 'not_working'])->name('purchase.not_working');

    });
});
