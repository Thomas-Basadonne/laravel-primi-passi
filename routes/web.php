<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web"  middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    $students= [
        'Thomas Basadonne',
        'Thomas 2',
        'Thomas 3'
    ];

    return view('students.list' , compact('students'));
});
