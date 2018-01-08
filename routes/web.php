<?php

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

Route::get('/', function () {

    return view('pages.index');
})->name('index');
Route::get('introduction',function (){
   return view('pages.introduction');
})->name('introduction');
Route::get('contact-us',function (){
    return view('pages.contact-us');
})->name('contact-us');
Route::get('list-product',function (){
    return view('pages.list-product');
})->name('list-product');
Route::get('news',function (){
    return view('pages.news');
})->name('news');
