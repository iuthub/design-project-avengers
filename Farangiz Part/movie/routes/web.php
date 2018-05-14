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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check_user', [
	'uses'=>"RoutesController@index", 
	'as'=>'check_user'
]);

Route::get("/admin/index", [
	'uses'=>"AdminController@index",
	'as'=>"admin.index"
]);

Route::post("admin/update/{id}", [
	'uses'=>"AdminController@update", 
	'as'=>"admin.update"
]);

Route::get("admin/users", [
	'uses'=>"AdminController@users",
	'as'=>"admin.users"
]);

Route::get("admin/users/trashed", [
	'uses'=>"AdminController@users_trashed",
	'as'=>"admin.users.trashed"
]);

Route::get("admin/user/restore/{id}", [
	'uses'=>"AdminController@user_restore",
	'as'=>"admin.user.restore"
]);

Route::get("admin/users/trash/{id}", [
	'uses'=>"AdminController@user_trash",
	'as'=>"admin.user.trash"
]);

Route::get("admin/users/delete/{id}", [
	'uses'=>"AdminController@user_delete",
	'as'=>"admin.user.delete"
]);

Route::get("/user/index", [
	'uses'=>"UsersController@index",
	'as'=>"user.index"
]);

Route::get('user/profile/{id}', [
	'uses'=>"RoutesController@profile", 
	'as'=>"profile"
]);

Route::get('admin/movies', [
	'uses'=>"AdminController@movies",
	'as'=>'admin.movies'
]);