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


Route::get('/login', function(){
	return view('login');
});

Route::post('/login', function(){
	echo "posted";
});

Route::get('/register', function(){
	echo "this is signup page";
});