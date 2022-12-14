<?php

use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    $products = DB::table('products')->get();
    return view('products.index',compact('products'));
})->name('home');
Route::get('/products', function () {
    $products = DB::table('products')->get();
    return view('products.index',compact('products'));
});
Route::get('/products/{product}', function ($id) {
    $product = DB::table('products')->find($id);
    return view('products.show', compact('product'));
});

Route::get('test','ProductIdController@submit')->name('test') ;

Route::get('/add-product', function () {
    return view('addNewProduct');
})->name('addProduct');

/*Чтобы отслеживать страницу используется get чтобы принимать данные из формы используется метод post*/
Route::post('/product/submit-form', 'ProductIdController@submit')->name('product-form');

Route::get('/product/{id}', 'ProductIdController@showOneProduct')->name('one-product');

Route::get('/product/{id}/update', 'ProductIdController@editProduct')->name('edit-product');
Route::post('/product/{id}/update', 'ProductIdController@editProductSubmit')->name('edit-product-submit');


Route::get('/product/{id}/delete', 'ProductIdController@deleteProduct')->name('delete-product');


