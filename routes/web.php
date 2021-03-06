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
    return view('welcome');
});

Route::get('/demo', function () {
   return view('demo');
});

// routes/web.php;
// Route::get('my-home', 'HomeController@myHome');

// Route::get('my-users', 'HomeController@myUsers');

// app/Http/Controllers/HomeController.php;
Route::get('my-home', [HomeController::class, 'myhome']);
Route::get('my-users', [HomeController::class, 'myusers']);