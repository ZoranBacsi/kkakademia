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
    return view('index');
});
Route::get('/aktualis', function () {
    return view('pages.aktualis');
});
Route::get('/programszervezes', function () {
    return view('pages.programszervezes');
});
Route::get('/cornelius', function () {
    return view('pages.cornelius');
});
Route::get('/palyazat', function () {
    return view('pages.palyazat');
});
Route::get('/jelentesek', function () {
    return view('pages.jelentesek');
});
Route::get('/kapcsolat', function () {
    return view('pages.kapcsolat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
