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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    echo "<h1>On staging“ This is Staging Environment - RIMA MERTAH ”

</h1>";
    echo "<h1>On Production“ This is Production Environment- RIMA MERTAH ”

</h1>";
});
