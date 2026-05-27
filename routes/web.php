<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::redirect('/home', '/');

Route::post('/', [ServiceRequestController::class, 'addMessage']);

Route::get('/home/about', function () {
    return view('front.about');
})->name('about');

Route::get('/home/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/home/product', function () {
    return view('front.product');
})->name('product');

Route::get('/urun/{id}', [ProductController::class, 'productDetail'])->name('product-detail');

Route::get('/home/request', function () {
    return view('front.contactform');
})->name('request');

Route::post('/lpanel/dashboard/add-service', [ServiceRequestController::class, 'addService'])->name('addservice');
Route::post('/lpanel/dashboard/add-message', [ServiceRequestController::class, 'addMessage'])->name('addmessage');
