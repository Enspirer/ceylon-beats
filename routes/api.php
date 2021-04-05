<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\MusicController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FavoriteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('music_price/{itemID}/{price_package}', [HomeController::class, 'getJsonData'])->name('contact');

Route::post('add_favorite',[FavoriteController::class,'insertItem'])->name('add_favorite');


