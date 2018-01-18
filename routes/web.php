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

Route::get('index',[
   'as'=>'index',
   'uses'=>'HomeController@getIndex'
]);
Route::get('/admin',function (){
   return view('admin.home');
});


Route::get('/',function (){
   return view('master');
});
Route::post('showProductBySelectLimit','HomeController@showProductBySelectLimit');
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
Route::get('login','LoginController@show')->name('login');
Route::post('post-login',[
   'as'=>'post-login',
   'uses'=>'LoginController@login'
]);
Route::get('register','RegisterController@show')->name('register');
Route::post('post-register',[
    'as'=>'post-register',
    'uses'=>'RegisterController@register'
]);
Route::get('logout',[
   'as'=>'logout',
    'uses'=>'LoginController@logout'
]);
Route::get('reset-password',[
   'as'=>'reset-password',
   'uses'=>'LoginController@resetPassword'
]);
Route::get('product-detail/{id}',[
    'as'=>'product-detail',
    'uses'=>'HomeController@detaiProduct'
]);

Route::post('cart',[
    'as'=>'post-cart',
    'uses'=>'HomeController@addCart'
]);
Route::get('cart',[
   'as'=>'cart',
   'uses'=>'HomeController@showCart'
]);
Route::get('delete-cart/{id}',[
   'as'=>'delete-cart',
   'uses'=>'CartController@deleteCart'
]);
Route::get('update-cart',[
    'as'=>'update-cart',
    'uses'=>'CartController@updateCart'
]);
Route::get('/payment','PaymentController@getPayment')->name('payment');
Route::post('/payment','PaymentController@postPayment')->name('post-payment');
Route::get('/use-discount','PaymentController@useDiscount')->name('use-discount');
Route::get('check-order',function (){
    return view('pages.checkorder');
})->name('check-order');

Route::get('payment-success',function (){
   return view('pages.payment-success');
});
Route::get('test',function (){
    return view('pages.test');
});
Route::prefix('admin')->group(function (){
   Route::namespace('AdminAuth')->group(function (){
       Route::get('/login','LoginController@showLoginForm')->name('admin.login');
       Route::post('/login','LoginController@login')->name('admin.login');
   }) ;
});

