<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/our-story', 'pages.our-story')->name('our-story');
Route::view('/products', 'pages.products')->name('products');
Route::view('/recipes', 'pages.recipes')->name('recipes');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');
