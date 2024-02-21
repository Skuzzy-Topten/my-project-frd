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
    return view('home');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/organization-chart', function () {
    return view('organization-chart');
});

Route::get('/policy-and-objective', function () {
    return view('policy-and-objective');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/laws-and-instructions', function () {
    return view('laws-and-instructions');
});

Route::get('/news/{id}', 'PostsController@post_detail');
