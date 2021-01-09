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
Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard','PostsController@index')->name('dashboard');
    Route::get('/post-delete/{id}','PostsController@destroy')->name('posts.de');
    Route::get('logout','UserController@logout')->name('logout');
  

});
Route::group(['middleware'=>'auth'],function(){});
Route::get('/', function () {
    return view('welcome');
})->name('login');
Route::post('/signup','UserController@postSignUp')->name('signup');
Route::post('/signin','UserController@postSignIn')->name('signin');
Route::post('/edit','PostsController@postEdit')->name('edit');
Route::post('/like','PostsController@postLike')->name('like');
Route::post('/comment','PostsController@postCom')->name('com');
Route::post('/comment-show','PostsController@showCom')->name('showCom');
Route::post('/updateaccount','UserController@saveAccount')->name('account.save');
Route::get('/account','UserController@account')->name('account');
Route::resource('posts','PostsController');


