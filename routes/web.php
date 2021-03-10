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


Route::get('/', function () {
  return view('welcome', ['title' => 'Home']);
});

Route::get('/test', function () {
  return view('test', ['title' => 'Test']);
});


/*
|--------------------------------------------------------------------------
| VueJs Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your Vue application. 
/ Simply uncomment the code below and define your routes in /js/routes.js !
|
*/

/* 
Route::get('/{any?}', function () {
  return view('vue');
});
 */
