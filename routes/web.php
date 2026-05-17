<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\SeoController;
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

// Yönetim Paneli
Route::get('/lpanel/login', function () {
    return view('lpanel.front.login');
})->name('login');

Route::get('/lpanel/dashboard', function () {
    return view('lpanel.front.index');
})->name('dashboard');

Route::get('/lpanel/product', function () {
    return view('lpanel.front.products');
})->name('products');

Route::get('/lpanel/product/new', function () {
    return view('lpanel.front.addprod');
})->name('newproducts');

Route::get('/lpanel/content/', function () {
    return view('lpanel.front.content');
})->name('content');

Route::post('/lpanel/content/', [ContentController::class, 'updateContent'])->name('contentupdate');

Route::get('/lpanel/seo/', function () {
    return view('lpanel.front.seosetting');
})->name('seo');

Route::post('/lpanel/seo/', [SeoController::class, 'updateSeo'])->name('seoupdate');

Route::get('/lpanel/user/', function () {
    return view('lpanel.front.usersetting');
})->name('user');

Route::get('/lpanel/error', function () {
    return view('lpanel.front.error');
})->name('error');
