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


Route::get('/', "HomeController@index");

Route::get('/about', "HomeController@about");

Route::get('/contact', "HomeController@contact");

Route::get('/help', "HomeController@help");

route::get("/user/calculator/{num1}/{num2}", "UserController@calculator");

//route::get('/admin', "Admin\\AdminController@dashboard");

route::prefix('/admin')->group(function(){
    route::get('/', "Admin\AdminController@dashboard");
});