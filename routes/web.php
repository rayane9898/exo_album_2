<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name("home");

Route::get("/admin/user","UserController@index")->name("userAdmin");
Route::get("/admin/create", "UserController@create")->name("createUser");
Route::post("/admin/store", "UserController@store")->name("storeUser");
Route::get("/admin/edit/{id}", "UserController@edit")->name("editUser");
Route::post("/admin/update/{id}", "UserController@update")->name("updateUser");
Route::get("/admin/destroy/{id}", "UserController@destroy")->name("destroyUser");
// Route::get("/admin/User/{user_id}", "userController@show")->name("showUser");

Route::get("/admin/album","AlbumController@index")->name("albumAdmin");
Route::get("/admin/createAlbum", "AlbumController@create")->name("createAlbum");
Route::post("/admin/storeAlbum", "AlbumController@store")->name('storeAlbum');
Route::get('/admin/showAlbum/{id}', "UserController@show")->name('showAlbum');
Route::get("admin/destroyAlbum/{id}","AlbumController@destroy")->name("destroyAlbum");

Route::get('/admin/photo', "PhotoController@index")->name("photoAdmin");
Route::get('admin/createPhoto', "PhotoController@create")->name("createPhoto");
Route::post("/admin/storePhoto", "PhotoController@store")->name("storePhoto");
Route::get("/admin/editPhoto/{id}", "PhotoController@edit")->name("editPhoto");
Route::post("/admin/updatePhoto/{id}","PhotoController@update")->name("updatePhoto");
Route::get("/admin/destroyPhoto/{id}","PhotoController@destroy")->name("destroyPhoto");

  