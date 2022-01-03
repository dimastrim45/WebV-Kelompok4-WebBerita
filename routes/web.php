<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


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
//     return view('posts', [
//         "title" => "Home"
//     ]);
// });

//routing default ke posts
//Route::get('/', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']
// function(){
//     return view('home', [
//         "title" => 'Home'
//     ]);
// }
);

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

Route::get('/admin_post', function () {
    return view('admin_post', [
        "title" => "Admin_post"
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

Route::get('/index', function(){
    return view('dashboard/index', [
    ]);
});



// Route::get('/admin_post_view', function(){
//     return view('admin_post_view', [
//         "home" => "admin_post_view"
//     ]);
// });
Route::get('/admin_post_view', [PostController::class, 'indexAdmin']
);


Route::get('/login', function(){
    return view('login', [
        "home" => "login"
    ]);
});

Route::get('/register', function(){
    return view('register', [
        "home" => "register"
    ]);
});
Route::get('/admin_post_view/hapus/{id}', [AdminController::class, 'delete']);
