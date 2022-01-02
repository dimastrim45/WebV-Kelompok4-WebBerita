<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function delete($id) {
    $post = Post::find($id);
    $post->delete();
    return redirect('/admin_post_view/');
}
}
