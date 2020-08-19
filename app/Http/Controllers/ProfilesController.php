<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function index(User $user)
    {

        return view('profiles.index ', compact('user'));
    }

    public function edit(User $user) {

        // protect the view, only the auth user can edit the profile
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));

    }

    public function update(User $user) {

        // protect the view, only the auth user can update the profile
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
