<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BerandaController@beranda');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('/dashboard/category', 'Dashboard\CategoryController');
    Route::resource('/dashboard/post', 'Dashboard\PostController');

    //Route::get('/laravel-filemanager', 'LfmController@show');
    //Route::post('/laravel-filemanager/upload', 'UploadController@upload');

});

Route::group(['middleware' => 'web'], function () {
  // Authentication Routes...
  $this->get('login', 'Auth\AuthController@showLoginForm');
  $this->post('login', 'Auth\AuthController@login');
  $this->get('logout', 'Auth\AuthController@logout');

  // Password Reset Routes...
  $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
  $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
  $this->post('password/reset', 'Auth\PasswordController@reset');

    Route::get('/dashboard', 'Dashboard\DashboardController@index');


});
