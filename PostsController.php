<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->get();
        return view('index')->with(['posts' => $post]);
    }
    public function add()
    {
        return view('add');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required'
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->author = $request->input('author');
        $post->save();
        return redirect('/')->withSuccess('thanks your post has been created successfully ...');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('show')->with(['post' => $post]);
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('update')->with(['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required'
        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->author = $request->input('author');
        $post->update(['id' => $id]);
        return redirect('/')->withSuccess('thanks your post has been updated successfully ...');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/')->withSuccess('thanks your post has been deleted successfully ...');
    }
}
