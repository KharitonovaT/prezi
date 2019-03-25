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
    return view('welcome');
});
Route::get('/show/1', function () {
    return view('show/one');
});


// Route::get('/show/2', function () {
//     return view('show/two');
// });

//показать график
Route::get('/show/2', 'SlidesController@show2');
//соранить данные с формы
Route::post('/show', 'SlidesController@store');
//показать форму
Route::get('/form/2', function () {
    return view('form/two');
})->name('slide2');

Route::post('/form', 'SlidesController@store');


Route::get('/show/3', function () {
    return view('show/three');
});

Route::get('/form/4', function () {
    return view('form/four');
})->name('slide4');
//показать график
Route::get('/show/4', 'SlidesController@show4');

Route::get('/form/5', function () {
    return view('form/five');
})->name('slide5');
//показать график
Route::get('/show/5', 'SlidesController@show5');


Route::get('/form/6', function () {
    return view('form/six');
})->name('slide6');
//показать график
Route::get('/show/6', 'SlidesController@show6');

Route::get('/form/7', function () {
    return view('form/seven');
})->name('slide7');
//показать график
Route::get('/show/7', 'SlidesController@show7');

Route::get('/form/8', function () {
    return view('form/eight');
})->name('slide8');
//показать график
Route::get('/show/8', 'SlidesController@show8');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
