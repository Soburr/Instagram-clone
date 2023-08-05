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

    

}
