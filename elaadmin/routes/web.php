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
// Route::get('/admin', function(){
//     return view("admin.index");
// })->middleware('auth','admin');
 
// Route::get('/dealer', function(){
//     return view("dealer.index");
// })->middleware('auth','dealer');
 
// Route::get('/customer', function(){
//     return view("customer.index");    
// })->middleware('auth','customer');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
