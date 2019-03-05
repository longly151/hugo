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

Route::group(['prefix' => 'admin','namespace' => 'Auth'], function () {
    Route::get('login','LoginController@getLogin');
    Route::post('login','LoginController@postLogin');

    Route::get('register','RegisterController@getRegister');
    Route::post('register','RegisterController@postRegister');

    Route::get('logout','LoginController@logout');
});
Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function () {
        Route::get('/', function () {
            return view('admin.body.home');
        });
        Route::group(['prefix' => 'post'], function() {
            Route::get('add', 'PostController@create');
            Route::post('add', 'PostController@store');
            Route::get('manage', 'PostController@index');
            Route::get('manage-by-author', 'PostController@manageByAuthor');
            Route::get('bin', 'PostController@bin');
            Route::group(['middleware' => 'authorRole:post'], function () {
                Route::get('edit/{id}', 'PostController@edit');
                Route::post('edit/{id}', 'PostController@update');
                Route::post('delete', 'PostController@delete');
                Route::post('restore', 'PostController@restore');
                Route::post('completed-delete', 'PostController@destroy');
            });
        });
        Route::group(['prefix' => 'category'], function() {
            Route::get('add', 'CategoryController@create');
            Route::post('add', 'CategoryController@store');
            Route::get('manage', 'CategoryController@index');
            Route::get('bin', 'CategoryController@bin');
            Route::group(['middleware' => 'authorRole:category'], function () {
                Route::get('edit/{id}', 'CategoryController@edit');
                Route::post('edit/{id}', 'CategoryController@update');
                Route::post('delete', 'CategoryController@delete');
                Route::post('restore', 'CategoryController@restore');
                Route::post('completed-delete', 'CategoryController@destroy');
            });
        });
        Route::group(['prefix' => 'tag'], function() {
            Route::get('add', 'TagController@create');
            Route::post('add', 'TagController@store');
            Route::get('manage', 'TagController@index');
            Route::get('bin', 'TagController@bin');
            Route::group(['middleware' => 'authorRole:tag'], function () {
                Route::get('edit/{id}', 'TagController@edit');
                Route::post('edit/{id}', 'TagController@update');
                Route::post('delete', 'TagController@delete');
                Route::post('restore', 'TagController@restore');
                Route::post('completed-delete', 'TagController@destroy');
            });
        });

        Route::group(['prefix' => 'user'], function() {
            Route::get('/list', 'UserController@list');
            Route::get('/view/{id}','UserController@show');
            Route::group(['middleware' => 'checkRole:admin'], function () {
                Route::get('manage','UserController@index');
                Route::post('manage/{id}','UserController@update');
                Route::post('ban', 'UserController@ban');
                Route::post('delete', 'UserController@delete');
        
                Route::get('inactive', 'UserController@inactive');
                Route::post('active', 'UserController@active');
        
                Route::get('bin', 'UserController@bin');
                Route::post('restore', 'UserController@restore');
                Route::post('completed-delete', 'UserController@destroy');
            });
        });
        Route::group(['prefix' => 'profile'], function() {
            Route::get('/', 'ProfileController@index');
            Route::get('change-info', function () {
                return redirect('admin/profile')->with(['active'=>'changeInfo']);
            });
            Route::post('change-info', 'ProfileController@updateInfo');
            Route::get('change-password', function () {
                return redirect('admin/profile')->with(['active'=>'changePassword']);
            });
            Route::post('change-password', 'ProfileController@updatePassword');
        });
        Route::group(['prefix' => 'ajax'], function() {
            Route::get('category/{id}', 'AjaxController@getCategories');
        });
    });
    Route::group(['prefix' => 'admin/error'], function() {
        Route::get('400', function () {
            return view('admin.body.error.400');
        });
        Route::get('403', function () {
            return view('admin.body.error.403');
        });
        Route::get('404', function () {
            return view('admin.body.error.404');
        });
        Route::get('500', function () {
            return view('admin.body.error.500');
        });
        Route::get('503', function () {
            return view('admin.body.error.503');
        });
    });
});
Route::group(['namespace' => 'Client','middleware'=>'redisClient'],function() {
    Route::get('/', 'PageController@home');
    Route::get('/gallery', 'PageController@gallery');
    Route::get('/contact', 'PageController@contact');
    Route::get('/about', 'PageController@about');
    Route::get('/404', 'PageController@error_404');
    Route::get('/{url}', 'PageController@post');
    
});
