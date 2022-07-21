<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\AddTaskController;
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
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/admin/addtask', function () {
    return view('addtask');
});

Route::get('/user/requests','App\Http\Controllers\RequestsController@index');

Route::get('/admin','App\Http\Controllers\AddTaskController@index');

Route::get('/user/submit', 'App\Http\Controllers\RequestsController@submit');

Route::get('/admin/addtask/submit', 'App\Http\Controllers\AddTaskController@submit');

Route::get('/admin/requests', 'App\Http\Controllers\RequestsController@adminrequests');
Auth::routes();


