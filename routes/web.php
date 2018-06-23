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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware('auth');

Route::get('/changepassword', function () {
    return view('changepassword');
 })->middleware('auth');

 Route::get('/profile', function () {
    return view('profile');
 })->middleware('auth');

 Route::get('/admins', function () {
    return view('admins');
 })->middleware('auth');
 

