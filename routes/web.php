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
Route::post('/news/store/','Admin\NewsController@store')
    ->name('admin.news.store');
Route::get('/news/feedback/','FeedbackController@index')
    ->name('feedback');
Route::post('/news/feedback/save','FeedbackController@save')
    ->name('feedbackSave');

// Запросы от пользователей
Route::get('/news/userRequest/','userRequestController@index')
    ->name('userRequest');
Route::post('/news/userRequest/save','userRequestController@save')
    ->name('userRequest.save');

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
