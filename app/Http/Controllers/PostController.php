<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
// use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('upload', 'public');

         $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
         $image->save();

        auth()->user()->posts()->create([
            'caption' => $validatedData['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/dashboard/'. auth()->user()->id);
    }

    public function show($post) {
        $post = Post::findOrFail($post);
       return view('post.show', [
        'post' => $post,
       ]);
    }

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //          'caption' => 'required',
    //          'image' => 'required|image',
    //         ]);

    //         auth()->user()->posts()->create($validatedData);

    //     $post = new Post([
    //         'caption' => $request->input('caption'),
    //         'image' => $request->input('image'),
    //     ]);
    //     $post->save();
    //     dd(request()->all());
    // }
}
