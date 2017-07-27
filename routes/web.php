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

Route::get('/mamat', function () {
    return view('index');
});
Route::get('/testmodel', function(){
	$query =App\Post::all();
	return $query;
});
Route::get('/test', function(){
	$query =App\Post::find(1);
	return $query;
	});

	Route::get('/testm', function(){
	$query =App\Post::where('title','like','%cepat nikah%')->get();
	return $query;
});
	Route::get('/model', function(){
	$query =App\Siswa::all();
	return $query;
});
Route::get('/testt', function(){
	$query =App\Siswa::find(1);
	return $query;
	});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
