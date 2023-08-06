<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ($user) {

        $user = User::findOrFail($user);
        return view('dashboard.index', [
            'user' => $user,
        ]);
    }

    public function edit ($user) {
        $user = User::findOrFail($user);
        return view('dashboard.edit', [
            'user' => $user,
        ]);
    }

    public function update (User $user) {
        $validatedData = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => '',
            'image' => '',
        ]);

        $user->dashboard->update($validatedData);
        return redirect("/dashboard/{$user->id}");
    }

}
