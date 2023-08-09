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

        auth()->user()->dashboard->update($validatedData);
        return redirect("/dashboard/{$user->id}");
    }

}
