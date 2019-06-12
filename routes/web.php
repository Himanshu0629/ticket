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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware'=> 'auth'], function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add', 'admin\BookingController@add');
Route::post('/createBooking', 'admin\BookingController@createBooking')->name('createBooking');
Route::get('/booking', 'admin\BookingController@booking')->name('booking');
Route::get('edit1/{id}', 'admin\BookingController@edit1')->name('edit.id');
Route::post('update1', 'admin\BookingController@update1')->name('update1');
Route::get('delete1/{id}', 'admin\BookingController@delete1')->name('delete.id');

Route::get('/create', 'admin\MovieController@create');
Route::get('/index', 'admin\MovieController@index')->name('index');
Route::post('/storeMovie', 'admin\MovieController@storeMovie')->name('storeMovie');
Route::get('edit2/{id}','admin\MovieController@edit2')->name('edit.id');
Route::post('update2', 'admin\MovieController@update2')->name('update2');
Route::get('delete2/{id}', 'admin\MovieController@delete2')->name('delete.id');

Route::get('/index1', 'admin\TicketController@index1')->name('index1');
Route::get('/createTicket', 'admin\TicketController@createTicket')->name('createTicket');
Route::post('/store', 'admin\TicketController@store')->name('store');
Route::get('edit3/{id}', 'admin\TicketController@edit3')->name('edit.id');
Route::post('update3', 'admin\TicketController@update3')->name('update3');
Route::get('delete3/{id}', 'admin\TicketController@delete3')->name('delete.id');

Route::get('/index2', 'admin\PriceController@index2')->name('index2');
Route::get('/createPrice', 'admin\PriceController@createPrice')->name('createPrice');
Route::post('/store1', 'admin\PriceController@store1')->name('store1');
Route::get('edit4/{id}', 'admin\PriceController@edit4')->name('edit.id');
Route::post('update4', 'admin\PriceController@update4')->name('update4');
Route::get('delete4/{id}', 'admin\PriceController@delete4')->name('delete.id');


Route::get('/index3', 'admin\OfferController@index3')->name('index3');
Route::get('/createOffer', 'admin\OfferController@createOffer')->name('createOffer');
Route::post('/store2', 'admin\OfferController@store2')->name('store2');
Route::get('edit5/{id}', 'admin\OfferController@edit5')->name('edit.id');
Route::post('update5', 'admin\OfferController@update5')->name('update5');
Route::get('delete5/{id}', 'admin\OfferController@delete5')->name('delete.id');


});

