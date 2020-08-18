<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller

{
    // required authentication to access to the form
    public function _²_construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        // fields validation
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        // create a post with the authenticated user
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->ida);
        
    }

}
