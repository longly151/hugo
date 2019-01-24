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






Route::get('admin', function () {
    return view('admin.body.home');
});

Route::get('admin/login', function () {
    return view('admin.body.auth.login');
});

Route::get('admin/register', function () {
    return view('admin.body.auth.register');
});

Route::post('admin/register','AdminController@register');
Route::post('admin/login','AdminController@login');






Route::get('admin/post/add', function () {
    return view('admin.body.post.add');
});
Route::get('admin/post/manage', function () {
    return view('admin.body.post.manage');
});
Route::get('admin/post/manage-by-author', function () {
    return view('admin.body.post.manage-by-author');
});
Route::get('admin/post/bin', function () {
    return view('admin.body.post.recycle_bin');
});





Route::get('admin/category/add', function () {
    return view('admin.body.category.add');
});
Route::get('admin/category/manage', function () {
    return view('admin.body.category.manage');
});
Route::get('admin/category/bin', function () {
    return view('admin.body.category.recycle_bin');
});





Route::get('admin/tag/add', function () {
    return view('admin.body.tag.add');
});
Route::get('admin/tag/manage', function () {
    return view('admin.body.tag.manage');
});
Route::get('admin/tag/bin', function () {
    return view('admin.body.tag.recycle_bin');
});




Route::get('admin/user/manage', function () {
    return view('admin.body.user.manage');
});
Route::get('admin/user/inactive', function () {
    return view('admin.body.user.inactive');
});
Route::get('admin/user/bin', function () {
    return view('admin.body.user.recycle_bin');
});



Route::get('admin/profile', function () {
    return view('admin.body.profile.profile');
});




Route::get('admin/error/400', function () {
    return view('admin.body.error.400');
});
Route::get('admin/error/403', function () {
    return view('admin.body.error.403');
});
Route::get('admin/error/404', function () {
    return view('admin.body.error.404');
});
Route::get('admin/error/500', function () {
    return view('admin.body.error.500');
});
Route::get('admin/error/503', function () {
    return view('admin.body.error.503');
});

Route::get('/schema/create', function(){
    Schema::create('roles',function($table){
        $table->increments('id');
        $table->string('name')->unique();
    });
    // Schema::create('users',function($table){
    //     $table->increments('id');
    //     $table->string('fullname');
    //     $table->string('username')->unique();
    //     $table->string('email')->unique();
    //     $table->string('phoneNumber')->unique();
    //     $table->string('password');
    //     $table->string('avatar')->default('http://s3.amazonaws.com/37assets/svn/765-default-avatar.png');
    //     $table->string('status')->default('active');
    //     $table->integer('roleId');
    //     $table->foreign('roleId')->references('id')->on('roles')->onDelete('cascade');
    //     $table->timestamp('created_at')->useCurrent();
    //     $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
    //     $table->dateTime('deleted_at')->nullable();
    // });
    // Schema::create('posts',function($table){
    //     $table->increments('id');
    //     $table->string('title');
    //     $table->text('description')->nullable();
    //     $table->string('content');
    //     $table->string('cover');
    //     $table->integer('author');
    //     $table->string('avatar');
    //     $table->string('status');
    //     $table->timestamps();
    //     $table->dateTime('deleted_at');
    // });
});

// Route::get('/schema/change', function(){
//     Schema::table('users',function($table){
//         $table->string('abc',50);
//     });
//     Schema::table('users',function($table){
//         $table->dropColumn('abc');
//     });
// });


// Route::get('/schema/drop', function(){
//     Schema::dropIfExists('roles');
//     Schema::dropIfExists('users');
//     Schema::dropIfExists('posts');
// });

// Route::get('model/select-all',function() {
//     $data = App\Role::find(2)->firstOrFail()->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });