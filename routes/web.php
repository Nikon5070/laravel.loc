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

Route::get('/', 'IndexController@index');

Route::get('article/{id}', 'IndexController@show')->name('articleShow');

Route::get('page/add', 'IndexController@add');
Route::post('page/add', 'IndexController@store')->name('articleStore');

Route::get('page/delete/{id}',function (\App\Article $id) {
//    $article = \App\Article::where('id',$id)->first();
    $id->delete();
    return redirect('/');

})->name('articleDelete');

