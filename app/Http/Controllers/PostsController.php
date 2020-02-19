<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image; // Image Intervention Library

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {
      // Validate request
      $data = request()->validate([
          'caption' => 'required',
          'image' => ['required', 'image'],
      ]);

      // Storage image location in variable.
      $imagePath = request('image')->store('uploads', 'public');

      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
      $image->save();

      // Get authenticated user, pass ID, and create a new post with caption and data.
      auth()->user()->posts()->create([
        'caption' => $data['caption'], // Store the caption.
        'image' => $imagePath // Store the uploaded image.
      ]);

      return redirect('profile/' . auth()->user()->id);  // Return to user's profile.
    }
}
