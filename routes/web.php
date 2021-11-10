<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'index']);


// Route::get('/health', function(){
//     return view('posts', [
//         "title" => "Health",
//         "type" => "health"
//     ]);
// });

Route::get('/health', [
    "title" => "Health",
    "type" => "health",
    PostController::class, 'shows'
]);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/education', function(){
    return view('posts', [
        "title" => "Education",
        "type" => "education"
    ]);
});

Route::get('/techno', function(){
    return view('posts', [
        "title" => "Technology",
        "type" => "techno"
    ]);
});

Route::get('/food', function(){
    return view('posts', [
        "title" => "Food",
        "type" => "food"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Sam Martin",
        "email" => "sammartintm45@gmail.com",
        "image" => "profile.jpg"
    ]);
});

