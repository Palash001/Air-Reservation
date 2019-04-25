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

// Route::get('/', function ()
//
// {
//     return view('welcome');
//
// });

/*-------------------User Route--------------------
----------------------------------------------------*/

Route::get('/','User\UserController@index')->name('user.home');
Route::get('flightUser/','User\FlightUserController@index')->name('flightUser.index');
Route::get('flightUser/create/','User\FlightUserController@create')->name('flightUser.create');
Route::post('flightUser/','User\FlightUserController@store')->name('flightUser.store');
Route::get('flightUser/edit/{id}','User\FlightUserController@edit')->name('flightUser.edit');
Route::put('flightUser/update/{id}','User\FlightUserController@update')->name('flightUser.update');


/*-------------------End User Route--------------------
----------------------------------------------------*/

Route::group(['middleware'=>'auth'],function(){

  /*-------------------Admin Route--------------------
  ----------------------------------------------------*/

  Route::get('admin/home','Admin\AdminController@index')->name('admin.dashboard');
  Route::get('admin/FlightSearch/','Admin\FlightSearchController@index')->name('FlightSearch.index');
  Route::get('admin/FlightSearch/create','Admin\FlightSearchController@create')->name('FlightSearch.create')->middleware('permission:create');
  Route::post('admin/FlightSearch/','Admin\FlightSearchController@store')->name('FlightSearch.store')->middleware('permission:edit');
  Route::get('admin/FlightSearch/show/{id}','Admin\FlightSearchController@show')->name('FlightSearch.show')->middleware('permission:view');
  Route::get('admin/FlightSearch/edit/{id}','Admin\FlightSearchController@edit')->name('FlightSearch.edit')->middleware('permission:edit');
  Route::put('admin/FlightSearch/update/{id}','Admin\FlightSearchController@update')->name('FlightSearch.update')->middleware('permission:edit');
  Route::delete('admin/FlightSearch/delete/{id}','Admin\FlightSearchController@destroy')->name('FlightSearch.destroy')->middleware('permission:delete');

  Route::get('admin/role/','Admin\RoleController@index')->name('role.index');
  Route::get('admin/role/create','Admin\RoleController@create')->name('role.create');
  Route::post('admin/role/','Admin\RoleController@store')->name('role.store');

  Route::get('admin/permission/','Admin\RoleController@permissionIndex')->name('permission.index');
  Route::get('admin/permission/create','Admin\RoleController@permissionCreate')->name('permission.create');
  Route::post('admin/permission/','Admin\RoleController@permissionStore')->name('permission.store');

  Route::get('admin/permission/assign','Admin\RoleController@permissionAssign')->name('permission.permissionAssign');
  Route::post('admin/permission/assign','Admin\RoleController@permissionAssignStore')->name('permission.permissionAssignStore');

  Route::get('admin/user','Admin\RoleController@users')->name('user.users');
  Route::get('admin/user/{id}','Admin\RoleController@userShow')->name('user.show');
  Route::post('admin/user/','Admin\RoleController@roleAssign')->name('role.assign');

  Route::get('admin/permission/permissionToUser', 'Admin\RoleController@permissionToUser')->name('role.permissionToUser');
  Route::post('admin/permission/permissionToUser', 'Admin\RoleController@permissionToUserStore')->name('role.permissionToUserStore');


  Route::get('admin/FlightBook/','Admin\BookController@index')->name('FlightBook.index');
  Route::get('admin/FlightBook/create/{id}','Admin\BookController@create')->name('FlightBook.create')->middleware('permission.create');
  Route::post('admin/FlightBook/','Admin\BookController@store')->name('FlightBook.store');

  /*-------------------End Admin Route--------------------
  ----------------------------------------------------*/


  /*------------------------User Route----------------*/

  Route::get('admin/users/','Admin\UserController@index')->name('users.index');
  Route::get('admin/users/show/{id}','Admin\UserController@show')->name('users.show')->middleware('permission.show');
  // Route::get('admin/users/edit/{id}','Admin\UserController@edit')->name('users.edit')->middleware('permission:edit');
  // Route::put('admin/users/update/{id}','Admin\UserController@update')->name('users.update')->middleware('permission.edit');
  // Route::delete('admin/users/delete/{id}','Admin\UserControoler@destory')->name('users.destroy')->middleware('permisssion.delete');

    /*------------------------User Search Route----------------*/

  Route::get('user_search/','User\UserSearchController@index')->name('user_search.index');
  Route::get('user_search/create/','User\UserSearchController@create')->name('user_search.create');
  Route::get('user_search/find','User\UserSearchController@find')->name('user_search.find');


  Route::get('/','User\UserController@index')->name('user.home');
  Route::get('flightUser/','User\FlightUserController@index')->name('flightUser.index');
  Route::get('flightUser/create/','User\FlightUserController@create')->name('flightUser.create');
  Route::post('flightUser/','User\FlightUserController@store')->name('flightUser.store');
  Route::get('flightUser/edit/{id}','User\FlightUserController@edit')->name('flightUser.edit');
  Route::put('flightUser/update/{id}','User\FlightUserController@update')->name('flightUser.update');


    /*------------------------End Search User Route----------------*/

  Route::get('userBook/','User\BookController@index')->name('userBook.index');
  Route::get('userBook/create/{id}','User\BookController@create')->name('userBook.create');
  Route::post('userBook/','User\BookController@store')->name('userBook.store');
  Route::get('userBook/show/{bookDetail}','User\BookController@show')->name('userBook.show');

  Route::get('userBook/book_by_user','User\BookController@bookByUser')->name('userBook.bookByUser');
  Route::get('userBook/book_complete/','User\BookController@bookComplete')->name('userBook.bookComplete');

  Route::get('userBook/edit/{id}','User\BookController@edit')->name('userBook.edit');
  Route::put('userBook/update/{id}','User\BookController@update')->name('userBook.update');
  Route::delete('userBook/delete/{id}','User\BookController@destroy')->name('userBook.destroy');

  Route::get('userPayment/','User\PaymentController@index')->name('userPayment.index');
  Route::get('userPayment/create/{id}','User\PaymentController@create')->name('userPayment.create');
  Route::post('userPayment/','User\PaymentController@store')->name('userPayment.store');


});








// Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
