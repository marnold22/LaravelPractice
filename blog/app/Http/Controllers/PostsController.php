<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){


      $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();


      return view('posts.index', compact('posts'));
    }





    public function show($id){
      $post = Post::find($id);
      return view('posts.show', compact('post'));
    }




    public function create(){
      return view('posts.create');
    }




    public function store(){
      // $post = new Post;
      // $post->title = request('title');   // This is the longhand method
      // $post->body = request('body');
      // $post->save();

      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      auth()->user()->publish(

        new Post(request(['title', 'body']))
      );

      return redirect('/');
    }
}
