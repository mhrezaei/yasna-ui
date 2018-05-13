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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','YasnaController@index');

Route::get('/posts','YasnaController@blogposts');

Route::get('/article','YasnaController@article');

Route:: get('/form',function(){
    return view('yasna.editortest.test-editor');
});

Route::post('/test','YasnaController@test');

Route::get('/negar' , "NegarController@hello");

