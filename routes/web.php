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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get  GET送信のこと
// Route::post　POST送信のこと

Route::get('/', 'DiaryController@index') ->name('diary.index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('diary/create', 'DiaryController@create')->name('diary.create');
    Route::post('diary/create', 'DiaryController@store')->name('diary.create');
    
    Route::get('diary/{{diary}}/edit', 'DiaryController@edit')->name('diary.edit');
    Route::put('diary/{{diary}}/update', 'DiaryController@update')->name('diary.update');
    
    Route::delete('diary/{{diary}}/delete', 'DiaryController@destroy')->name('diary.destroy');    
});


Auth::routes();


