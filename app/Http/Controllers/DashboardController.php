<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    public function index ($user) {

        $user = User::findOrFail($user);
        return view('dashboard.index', [
            'user' => $user,
        ]);
    }

    public function edit (User $user) {

        $this->authorize('update', $user->dashboard);

        return view('dashboard.edit', [
            'user' => $user,
        ]);
    }

    public function update (User $user) {

        $this->authorize('update', $user->dashboard);

        $validatedData = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')) {

            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePath ];
        }

        auth()->user()->dashboard->update(array_merge(
            $validatedData,
            $imageArray ?? []
        ));
        return redirect("/dashboard/{$user->id}");
    }

}
