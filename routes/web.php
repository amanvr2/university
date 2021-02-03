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

// Route::get('/', function () {
//     return view('welcome'); 
// });

Route::get('/', 'studentController@view');

Route::get('/create', function () {
    return view('createStudent'); 
});

Route::post('/create-customer', 'studentController@create');

Route::get('/update/{id}', 'studentController@update');

Route::get('/edit/{id}', 'studentController@edit');

Route::get('/delete/{id}', 'studentController@delete');

 