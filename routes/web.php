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

Route::get('/index/{locale?}', function ($locale  = 'ta') {
    App::setLocale($locale);
    return view('pages.index');
});

Route::get('/press/{locale?}', function ($locale  = 'ta') {
    App::setLocale($locale);
    return view('pages.press');
});

Route::get('/news-extra/{locale?}', function ($locale  = 'ta') {
    App::setLocale($locale);
    return view('pages.news');
});

Route::get('/get-involved/{locale?}', function ($locale  = 'ta') {
    App::setLocale($locale);
    return view('pages.get-involved');
});

Route::get('/events/{locale?}', function ($locale  = 'ta') {
    App::setLocale($locale);
    $events = DB::table('events')->orderBy('from_date','asc')->take(3)->get();
    return view('pages.events',['events' => $events]);
});

Route::get('/contact/{locale?}', function ($locale  = 'ta') {
    App::setLocale($locale);
    return view('pages.contact');
});

Route::resource('news','NewsController');
Route::resource('event','EventController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('pages.index');
});
