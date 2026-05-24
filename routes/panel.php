<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProdCategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/lpanel/login', function () {
    return view('lpanel.front.login');
})->name('login');

Route::get('/lpanel/dashboard', function () {
    return view('lpanel.front.index');
})->name('dashboard');

Route::get('/lpanel/error', function () {
    return view('lpanel.front.error');
})->name('error');

Route::get('/lpanel/content', function () {
    return view('lpanel.front.content');
})->name('content');

Route::post('/lpanel/content/update', [ContentController::class, 'updateContent'])->name('contentupdate');

Route::get('/lpanel/seo', function () {
    return view('lpanel.front.seosetting');
})->name('seo');

Route::post('/lpanel/seo/update', [SeoController::class, 'updateSeo'])->name('seoupdate');

Route::get('/lpanel/user', [UsersController::class, 'getUser'])->name('user');

Route::get('/lpanel/user/new', function () {
    return view('lpanel.front.useradd');
})->name('newuser');

Route::post('/lpanel/user/new/action', [UsersController::class, 'addUser'])->name('addeduser');

Route::get('/lpanel/user/update/{id}', [UsersController::class, 'updateUser'])->name('updateuser');

Route::post('/lpanel/user/update/action/{id}', [UsersController::class, 'updateUserAction'])->name('updateduser');

Route::get('/lpanel/user/delete/{id}', [UsersController::class, 'deleteUser'])->name('deleteuser');

Route::get('/lpanel/category', function () {
    return view('lpanel.front.categorysetting');
})->name('category');

Route::get('/lpanel/category/new', function () {
    return view('lpanel.front.categoryadd');
})->name('newcategory');

Route::post('/lpanel/category/new/action', [ProdCategoriesController::class, 'addCategories'])->name('addedcategory');

Route::get('/lpanel/category/update/{id}', [ProdCategoriesController::class, 'updateCategories'])->name('updatecategory');

Route::post('/lpanel/category/update/action/{id}', [ProdCategoriesController::class, 'updateCategoryAction'])->name('updatedcategory');

Route::get('/lpanel/category/delete/{id}', [ProdCategoriesController::class, 'deleteCategory'])->name('deletecategory');


Route::get('/lpanel/product', function () {
    return view('lpanel.front.productsetting');
})->name('products');

Route::get('/lpanel/product/new', function () {
    return view('lpanel.front.productadd');
})->name('newproducts');


Route::post('/lpanel/product/new/action', [ProductController::class, 'addProduct'])->name('addedproduct');

Route::get('/lpanel/product/update/{id}', [ProductController::class, 'updateProduct'])->name('updateproduct');

Route::post('/lpanel/product/update/action/{id}', [ProductController::class, 'updateProductAction'])->name('updatedproduct');

Route::get('/lpanel/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
