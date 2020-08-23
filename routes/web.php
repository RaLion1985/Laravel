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

Route::get ('/category/{category}','Category@show')
    ->name('category');

Route::get ('/hello/{name}', function (string $name) {
	return "Hello, " . $name;
});
Route::get('/','WelcomeController@index')
    ->name('Welcome');
Route::get('/IndexCategory/','Categories@indexCategory')
    ->name('Categories');
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
// Админка
Route::group(['middleware'=>'auth'],function () {
    Route::get('/account','Account\IndexController@index')
        ->name('account');
    Route::group(['prefix'=>'Accounts'],function () {
        Route::resource('/user','Accounts\UserController');
    });


    Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
        Route::get('/', 'Admin\IndexController@index')->name('admin');
        // news
        Route::resource('/news', 'Admin\NewsController');

    });

});

    Route::group(['prefix'=>'admin'],function ()
        {
            Route::resource('/categories','Admin\CategoriesController');
        }
    );

//Route::get('/admin','Admin\NewsController@index') ->name('admin.news.index');


// Запросы от пользователей
Route::get('/news/userRequest/','userRequestController@index')
    ->name('userRequest');
Route::post('/news/userRequest/save','userRequestController@save')
    ->name('userRequest.save');

Route::get('/AddNews/','AddNewNews@AddNews')
    ->name('AddNews');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Collections
Route::get('/collections',function ()
{
   $collection =  collect(
       [
          100,
          200,
          500,
          10000
       ]);
   //dd($collection->min());
    dd($collection->map(function ($item){
        return $item*4;
    }));
});

ROute::get ('/session/',function (){
    if(session()->has('test')) {
        dd(session()->get('test'));
    }
    session(['test'=>'My session']);
    return redirect('/session');
});

//
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
ttt
Route::get('/home', 'HomeController@index')->name('home');*/
