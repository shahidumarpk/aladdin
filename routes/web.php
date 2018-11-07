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
// Two Factor Authentication
Route::get('/otp', 'TwoFactorController@showTwoFactorForm');
Route::post('/otp', 'TwoFactorController@verifyTwoFactor');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', ['as' => 'dashboard' , function () {
   return view('dashboard');
}])->middleware('auth');

Route::get('/changepassword', ['as' => 'changepassword' , function () {
    return view('changepassword');
 }])->middleware('auth');

 Route::get('/profile', ['as' => 'profile' , function () {
    return view('profile');
 }])->middleware('auth');
//Roles
 Route::get('/roles/deactivate/{id}', 'RoleController@deactivate')->middleware('auth');
 Route::get('/roles/active/{id}', 'RoleController@active')->middleware('auth');
 Route::resource('roles', 'RoleController')->middleware('auth');

 //Sub admins/staff
 Route::get('/resetpassword/{id}', 'UserController@resetPassword')->middleware('auth')->name('resetpassword');
 Route::get('/admins/deactivate/{id}', 'UserController@deactivate')->middleware('auth');
 Route::get('/admins/active/{id}', 'UserController@active')->middleware('auth');
 Route::resource('admins', 'UserController')->middleware('auth');

 //Admin Menu
 Route::get('/menu/deactivate/{id}', 'AdminmenuController@deactivate')->middleware('auth');
 Route::get('/menu/active/{id}', 'AdminmenuController@active')->middleware('auth');
 Route::resource('menu', 'AdminmenuController')->middleware('auth');

 //Customers
 Route::get('/customers/resetpassword/{id}', 'CustomerController@resetPassword')->middleware('auth')->name('customer.resetpassword');
 Route::get('/customers/deactivate/{id}', 'CustomerController@deactivate')->middleware('auth');
 Route::get('/customers/active/{id}', 'CustomerController@active')->middleware('auth');
 Route::resource('customers', 'CustomerController')->middleware('auth');

 //Customers
 Route::get('/sellers/resetpassword/{id}', 'SellerController@resetPassword')->middleware('auth')->name('seller.resetpassword');
 Route::get('/sellers/deactivate/{id}', 'SellerController@deactivate')->middleware('auth');
 Route::get('/sellers/active/{id}', 'SellerController@active')->middleware('auth');
 Route::resource('sellers', 'SellerController')->middleware('auth');

//Category
 Route::resource('categories', 'CategoryController')->middleware('auth');

//Attribue Controller 
Route::resource('attributes', 'AttributeController')->middleware('auth');

 //Products
 Route::resource('products', 'ProductController')->middleware('auth');

  //Orders
  Route::resource('orders', 'OrderController')->middleware('auth');


 
