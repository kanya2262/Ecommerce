<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\controllers\BrandController;
use App\Http\controllers\CategoryController;

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




Route::get('/',function () {
    return view('backend.pages.index');
});



// Route::get('product', function () {
//     return view('backend.pages.product.create');
// });

// Route::get('producttable', function () {
//     return view('backend.pages.product.index');
// });

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');


Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
// Route::post('/brand/store', 'BrandController@brand') ;

Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::patch('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::delete('/brand/destroy/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
Route::get('/brand/show/{id}', [BrandController::class, 'show'])->name('brand.show');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

