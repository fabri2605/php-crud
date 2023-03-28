<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

// min 50;

class PostController extends Controller
{
    //

    public function index()
    {

        $posts = Post::all();

        return view('welcome', ['posts' => $posts]);
    }

    public function details(string $id)
    {

        $post = Post::find($id);

        return view('details', ['post' => $post]);
    }
    public function edition(string $id)
    {

        $post = Post::find($id);

        return view('edit', ['post' => $post]);
    }

    public function updater(Request $request)
    {
        $post = Post::find($request->id);
        if (isset($post)) {
            if (strlen($request->title) > 10) {
                $post->title = $request->title;
            }
            if (strlen($request->contentt) > 10) {
                $post->content = $request->contentt;
            }
            if (strlen($request->excerpt) > 10) {
                $post->excerpt = $request->excerpt;
            }
            $post->save();
            return view('details', ['post' => $post]);
        } else {
            $this->index();
        }
    }
}
