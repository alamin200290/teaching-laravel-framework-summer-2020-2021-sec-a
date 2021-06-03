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

Route::get('/', function () {
    	
    echo "Test request";
    //return view('welcome');
});


Route::get('/login', ['uses'=> 'LoginController@index']);
//Route::get('/login', [LoginController::class,'index']); for v8
Route::post('/login', 'LoginController@verify');

Route::get('/register', function(){
	echo "this is signup page";
});

Route::post('/register', function(){
	echo "this is signup page";
});

Route::get('/home', 'HomeController@index');