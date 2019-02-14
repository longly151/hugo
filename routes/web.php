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
Route::group(['prefix' => '/'], function () {
    Route::get('/', function () {
        return view('client.body.home');
    });
    Route::get('/post', function () {
        return view('client.body.post');
    });
    Route::get('/gallery', function () {
        return view('client.body.gallery');
    });
    Route::get('/contact', function () {
        return view('client.body.contact');
    });
    Route::get('/about', function () {
        return view('client.body.about');
    });
    Route::get('/404', function () {
        return view('client.body.404');
    });    
});

Route::group(['prefix' => 'admin','namespace' => 'Auth'], function () {
    Route::get('login','LoginController@getLogin');
    Route::post('login','LoginController@postLogin');

    Route::get('register','RegisterController@getRegister');
    Route::post('register','RegisterController@postRegister');

    Route::get('logout','LoginController@logout');
});
Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function () {
    Route::get('/', function () {
        return view('admin.body.home');
    });
    Route::group(['prefix' => 'post'], function() {
        Route::get('add', 'PostController@create');
        Route::get('manage', function () {
            return view('admin.body.post.manage');
        });
        Route::get('manage-by-author', function () {
            return view('admin.body.post.manage-by-author');
        });
        Route::get('bin', function () {
            return view('admin.body.post.bin');
        });
    });
    Route::group(['prefix' => 'category'], function() {
        Route::get('add', 'CategoryController@create');
        Route::post('add', 'CategoryController@store');
        Route::get('manage', 'CategoryController@index');
        Route::get('bin', 'CategoryController@bin');
        Route::group(['prefix' => 'edit'], function () {
            Route::get('topcate/{id}', 'CategoryController@topCategoryEdit');
            Route::post('topcate/{id}', 'CategoryController@topCategoryUpdate');
            Route::get('cate/{id}', 'CategoryController@categoryEdit');
            Route::post('cate/{id}', 'CategoryController@categoryUpdate');
            Route::get('subcate/{id}', 'CategoryController@subCategoryEdit');
            Route::post('subcate/{id}', 'CategoryController@subCategoryUpdate');
        });
        Route::group(['prefix' => 'delete'], function () {
            Route::post('topcate', 'CategoryController@topCategoryDelete');
            Route::post('cate', 'CategoryController@categoryDelete');
            Route::post('subcate', 'CategoryController@subCategoryDelete');
        });
        Route::group(['prefix' => 'restore'], function () {
            Route::post('topcate', 'CategoryController@topCategoryRestore');
            Route::post('cate', 'CategoryController@categoryRestore');
            Route::post('subcate', 'CategoryController@subCategoryRestore');
        });
        Route::group(['prefix' => 'completed-delete'], function () {
            Route::post('topcate', 'CategoryController@topCategoryDestroy');
            Route::post('cate', 'CategoryController@categoryDestroy');
            Route::post('subcate', 'CategoryController@subCategoryDestroy');
        });
    });
    Route::group(['prefix' => 'tag'], function() {
        Route::get('add', 'TagController@create');
        Route::post('add', 'TagController@store');
        Route::get('manage', 'TagController@index');
        Route::get('bin', 'TagController@bin');
        Route::group(['middleware' => 'authorRole'], function () {
            Route::get('edit/{id}', 'TagController@edit');
            Route::post('edit/{id}', 'TagController@update');
            Route::post('delete', 'TagController@delete');
            Route::post('restore', 'TagController@restore');
            Route::post('completed-delete', 'TagController@destroy');
        });
    });
    Route::group(['prefix' => 'user','middleware' => 'adminRole'], function() {
        Route::get('view/{id}','UserController@show');
        
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
    Route::group(['prefix' => 'error'], function() {
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
    Route::group(['prefix' => 'ajax'], function() {
        Route::get('category/{id}', 'AjaxController@getCategories');
    });
});