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

route::prefix('/admin')->middleware('auth')->group(function () {
    route::get('/', "Admin\AdminController@dashboard");

    // user
    route::get('/user', "Admin\UserController@index");
    route::get('/user/create', "Admin\UserController@create");
    route::post('/user/add', "Admin\UserController@add");
    route::get('/user/edit/{id}', "Admin\UserController@edit");
    route::post('user/update', "Admin\UserController@update");
    route::get('/user/delete/{id}', "Admin\UserController@delete");

    // category
    route::get('/category', "Admin\CategoryController@index");
    route::get('/category/create', "Admin\CategoryController@create");
    route::post('/category/add', "Admin\CategoryController@add");
    route::get('/category/edit/{id}', "Admin\CategoryController@edit");
    route::post('category/update', "Admin\CategoryController@update");
    route::get('/cagegory/delete/{id}', "Admin\CategoryController@delete");

    // banner
    route::get('/banner', "Admin\BannerController@index");
    route::get('/banner/create', "Admin\BannerController@create");
    route::post('/banner/add', "Admin\BannerController@add");
    route::get('/banner/edit/{id}', "Admin\BannerController@edit");
    route::post('banner/update', "Admin\BannerController@update");
    route::get('/banner/delete/{id}', "Admin\BannerController@delete");

    // Post
    route::get('/post', "Admin\PostController@index");
    route::get('/post/create', "Admin\PostController@create");
    route::post('/post/add', "Admin\PostController@add");
    route::get('/post/edit/{id}', "Admin\PostController@edit");
    route::post('post/update', "Admin\PostController@update");
    route::get('/post/delete/{id}', "Admin\PostController@delete");
});

// เกี่ยวกับการเข้าระบบ
Auth::routes();

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/addUser', function () {
    $user = new \App\User();
    $user->name = "Bundit Nuntates";
    $user->email = "bundit@cmru.ac.th";
    $user->password = bcrypt('1234');
    $user->save();
    return $user;
});
