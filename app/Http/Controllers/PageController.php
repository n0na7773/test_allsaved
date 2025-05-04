<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        $posts = \App\Models\Post::all();
        return view('dashboard', compact('posts'));
    }
    public function profile() {
        return view('profile');
    }
    public function settings() {
        return view('settings');
    }
    public function updateSettings(Request $request) {
        return back()->with('status','Settings saved.');
    }
    public function updateProfile(Request $request) {
        return back()->with('status','Profile updated.');
    }
}
