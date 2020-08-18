<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller

{
    // required authentication to access to the form
    public function _construct() {
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

        // create a post with the authenticated user
        auth()->user()->posts()->create($data);

        
    }

}
