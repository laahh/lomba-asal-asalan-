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

Route::get('/form', function () {
    return view('user.form');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/landing', function () {
    return view('user.landing');
});

Route::get('/login', function () {
    return view('user.auth.login');
});

Route::get('/register', function () {
    return view('user.auth.register');
});

Route::get('/role', function () {
    return view('user.role');
});

Route::get('/team-list', function () {
    return view('user.team-list');
});

Route::get('/tim', function () {
    return view('dashboard-user.all-team2');
});

Route::get('/calendar', function () {
    return view('dashboard-user.calendar');
});

Route::get('/tim-list', function () {
    return view('dashboard-user.all-team3');
});

Route::get('/all-tim', function () {
    return view('dashboard-user.all-team3');
});

Route::get('/tim-channel', function () {
    return view('dashboard-user.tim-channel');
});


Route::get('/tim-detail', function () {
    return view('dashboard-user.team-detail');
});

Route::get('/profile', function () {
    return view('user.profile');
});



Route::get('/testing', function () {
    return view('admin.dashboard');
});

Route::get('/myteam', function () {
    return view('dashboard-user.myteam');
});
