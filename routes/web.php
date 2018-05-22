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

// GET POST
// PUT DELETE UPDATE

//page

/*Route::get('/', function () {
    
     // View
    return view('welcome');
});*/

// article/1
Route::get('/', 'IndexController@index');
Route::get('article/{id}','IndexController@show')->name('articleShow');

Route::get('page/add', 'IndexController@add');
//POST
Route::post('page/add', 'IndexController@store')->name('articleStore');

//DELETE
Route::delete('/page/delete/{article}', function (\App\Article $article) {
    $article->delete();
    return redirect('/');
})->name('articleDelete');

	