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
//dd(app());
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get ('/hello/{name}', function (string $name) {
	return "Hello, " . $name;
});
Route::get('/','WelcomeController@index')
    ->name('Welcome');
Route::get('/IndexCategory/','Category@indexCategory')
    ->name('Category');
Route::get('/IndexNews/{id}','NewsOfCategory@indexNews')
    ->where ('id', '\d+')
    ->name('News');
Route::get('/ShowNew/{id_news}','ShowNew@ShowOneNew')
    ->name('OneNew');

Route::get('/AddNews/','AddNewNews@AddNews')
    ->name('AddNews');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
ttt
Route::get('/home', 'HomeController@index')->name('home');*/
