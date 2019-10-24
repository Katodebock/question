<?php

use Illuminate\Http\Request;


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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game', 'GameController@index')->name('game');
Route::get('/game', 'UserController@userdata');
Route::get('/admin', 'UserController@index')->name('admin');

Route::get('/hoera', function(Request $request){
   return response()->json([
       'ip'=> $request->getClientIp()
   ]);
});
