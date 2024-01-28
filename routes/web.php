<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master/user', function () {
    return view('pages.masters.users.index');
});

Route::get('/master/system', function () {
    return view('pages.masters.systems.index');
});

Route::get('/setting-template', function () {
    return view('pages.invitations.cms.index');
});
