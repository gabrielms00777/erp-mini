<?php

use App\Livewire\ProductType;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::view('/dashboard', 'admin.index')->name('admin.index');

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/product-types', ProductType\Index::class)->name('product_types.index')->lazy();
    Route::get('/product-types/create', ProductType\Create::class)->name('product_types.create');
    Route::get('/product-types/{productType}/edit', ProductType\Edit::class)->name('product_types.edit');
});
