<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;


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

Route::get('/admin_post_edit', [DashboardPostController::class, 'index'])->middleware('auth');

Route::get('/single_post', function(){
    return view('single_post', [
    ]);
});

// Route::get('/admin_post_view', function(){
//     return view('admin_post_view', [
//         "home" => "admin_post_view"
//     ]);
// });
Route::get('/admin_post_view', [PostController::class, 'indexAdmin']
)->middleware('auth');


// Route::get('/login', function(){
//     return view('login', [
//         "home" => "login"
//     ]);
// });

// Route::get('/register', function(){
//     return view('register', [
//         "home" => "register"
//     ]);
// });

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin_post_view/hapus/{id}', [AdminController::class, 'delete']);


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/post/store', [PostController::class, 'store'])->middleware('auth');
Route::get('/dashboard/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard', DashboardPostController::class)->middleware('auth');
Route::post('/dashboard/post/store', [PostController::class, 'store'])->middleware('auth');

Route::get('/admin_post_edit/{post:slug}', [DashboardPostController::class, 'edit'])->middleware('auth');
Route::get('/admin_post_edit/update/{post:slug}', [DashboardPostController::class, 'update'])->middleware('auth');
Route::put('/admin_post_edit/update/{post:slug}', 'DashboardPostController::class@update');

// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

