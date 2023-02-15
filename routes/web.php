<?php

use Illuminate\Support\Facades\Route;

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

// HOMEPAGE

Route::get('/', function () {
    return view('index');
})->name('Homepage');

// CONTACT

Route::get('/contact', function () {
    return view('contact');
})->name('Contact');

// ABOUT US

Route::get('/about-us', function () {
    return view('about_us');
})->name('About Us');
