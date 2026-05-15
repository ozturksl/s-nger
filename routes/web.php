<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('front.index');
})->name('home');

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/home/about', function(){
    return view('front.about');
})->name('about');

Route::get('/home/contact', function(){
    return view('front.contact');
})->name('contact');

Route::get('/home/product', function(){
    return view('front.product');
})->name('product');

Route::get('/urun/{id?}', function($id = 0){
    return view('front.product-detail');
})->name('product-detail');


//Yönetim Paneli
Route::get('/lpanel/login', function () {
    return view('lpanel.front.login');
})->name('login');

Route::get('/lpanel/dashboard', function(){
    return view('lpanel.front.index');
})->name('dashboard');

Route::get('/lpanel/product', function(){
    return view('lpanel.front.products');
})->name('products');

Route::get('/lpanel/product/new', function(){
    return view('lpanel.front.addprod');
})->name('new-products');
