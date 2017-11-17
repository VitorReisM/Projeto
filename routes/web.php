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

Route::get("/test",function (){
    return view("singlenews_singleimg");
});

/**
 * Home
 */
Route::get('/', "HomeController@index");


/**
 * News
 */
Route::get("/News/Create","NoticiaController@create");
Route::post("/News/Store","NoticiaController@store");

Route::get("/News/Edit/{id}","NoticiaController@Edit");
Route::post("/News/Update/{id}","NoticiaController@Update");

Route::get("/News/Delete/{id}","NoticiaController@create");
Route::post("/News/Destroy/{id}","NoticiaController@create");
