<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/our-story', 'pages.our-story')->name('our-story');
Route::view('/products', 'pages.products')->name('products');
Route::view('/recipes', 'pages.recipes')->name('recipes');
Route::view('/contact', 'pages.contact')->name('contact');
