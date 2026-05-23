<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('front.index');
})->name('home');

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/home/about', function () {
    return view('front.about');
})->name('about');

Route::get('/home/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/home/product', function () {
    return view('front.product');
})->name('product');

Route::get('/urun/{id?}', function ($id = 0) {
    return view('front.product-detail');
})->name('product-detail');



