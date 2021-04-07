<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MusicController;
use App\Http\Controllers\Backend\LicenseController;
use App\Http\Controllers\Backend\GenresController;
use App\Http\Controllers\Backend\InvoiceController;
use App\Http\Controllers\Backend\SettingsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Music Function
Route::get('music', [MusicController::class, 'index'])->name('music');
Route::get('music/getdetails', [MusicController::class, 'getTableDetails'])->name('music.get_table_details');
Route::get('music/create', [MusicController::class, 'create'])->name('music.create');
Route::post('music/store', [MusicController::class, 'store'])->name('music.store');
Route::post('music/update', [MusicController::class, 'update'])->name('music.update');
Route::get('music/delete/{id}', [MusicController::class, 'delete'])->name('music.delete');
Route::get('music/edit/{id}', [MusicController::class, 'edit'])->name('music.edit');

Route::get('license', [LicenseController::class, 'index'])->name('license');
Route::get('license/getdetails', [LicenseController::class, 'getTableDetails'])->name('license.get_table_details');
Route::get('license/create', [LicenseController::class, 'create'])->name('license.create');
Route::post('license/store', [LicenseController::class, 'store'])->name('license.store');
Route::post('license/update', [LicenseController::class, 'update'])->name('license.update');
Route::get('license/delete/{id}', [LicenseController::class, 'delete'])->name('license.delete');
Route::get('license/edit/{id}', [LicenseController::class, 'edit'])->name('license.edit');

Route::get('genres', [GenresController::class, 'index'])->name('genres');
Route::get('genres/getdetails', [GenresController::class, 'getTableDetails'])->name('genres.get_table_details');
Route::get('genres/create', [GenresController::class, 'create'])->name('genres.create');
Route::get('genres/edit/{id}', [GenresController::class, 'edit'])->name('genres.edit');
Route::post('genres/update', [GenresController::class, 'update'])->name('genres.update');
Route::post('genres/store', [GenresController::class, 'store'])->name('genres.store');
Route::get('genres/delete/{id}', [GenresController::class, 'delete'])->name('genres.delete');


Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('invoice/getdetails', [InvoiceController::class, 'getTableDetails'])->name('invoice.get_table_details');
Route::get('invoice/delete/{id}', [InvoiceController::class, 'delete'])->name('invoice.delete');
Route::get('invoice/show/{id}', [InvoiceController::class, 'show'])->name('invoice.show');


Route::get('settings/show', [SettingsController::class, 'show'])->name('settings.show');
Route::post('settings/index', [SettingsController::class, 'save_settings'])->name('settings.save_settings');
