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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/health', function () {
    return view('health', [
        "title" => "Health"
    ]);
});

Route::get('/education', function () {
    return view('education', [
        "title" => "Education"
    ]);
});

Route::get('/techno', function () {
    return view('konten', [
        "title" => "Technology"
    ]);
});

Route::get('/konten', function () {
    return view('konten', [
        "title" => "konten"
    ]);
});

Route::get('/food', function () {
    return view('food', [
        "title" => "Food"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sam Martin",
        "email" => "sammartintm45@gmail.com",
        "image" => "profile.jpg"
    ]);
});

Route::get('/admin_post_add', function(){
    return view('admin_post_add', [
        "home" => "admin_post_add"
    ]);
});
