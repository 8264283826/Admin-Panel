<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/dashboard', function () {
//     return view('website.backend.layout.main');
// });
Route::get('/dashboard','BackendController@index')->name('backend.index');
Route::resource('/dashboard/productcategory','ProductCategoryController');
Route::resource('/dashboard/product','ProductController');
Route::resource('/dashboard/productimage','ProductImageController');
Route::resource('/dashboard/customerdetail','CustomerDetailController');
Route::resource('/dashboard/payment','PaymentController');
Route::resource('/dashboard/contact','ContactController');
Route::resource('/dashboard/Contactform','ContactFormController');
Route::resource('/dashboard/customerdetail','CustomerDetailController');

