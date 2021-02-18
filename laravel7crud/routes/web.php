<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','LandingController@index');

Auth::routes();

Auth::routes(['register'=>false,'reset'=>false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/','BlogController@index')->name('blog.index');
    Route::post('/','BlogController@store')->name('blog.store');
    Route::get('/create','BlogController@create')->name('blog.create');
    Route::get('/edit/{id}','BlogController@edit')->name('blog.edit');
    Route::put('/update/{id}','BlogController@update')->name('blog.update');
    Route::delete('{id}','BlogController@destroy')->name('blog.delete');
    
});


Route::resource('member', MemberController::class);

Route::get('blog/show/{id}','BlogController@show')->name('blog.show');

// Route::get('posts','PostController@index');
// Route::get('posts/create','PostController@create');

// Route::get('article','ArticleController@index')->name('article');