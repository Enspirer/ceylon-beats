<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MusicController;
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Music Function
Route::get('music', [MusicController::class, 'index'])->name('music');
Route::get('music/getdetails', [MusicController::class, 'getTableDetails'])->name('music.get_table_details');
Route::get('music/create', [MusicController::class, 'create'])->name('music.create');
Route::post('music/store', [MusicController::class, 'store'])->name('music.store');


