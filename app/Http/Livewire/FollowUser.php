<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FollowUser extends Component
{
    public function follow(User $user) {
       $this->user->following()->attach($user);
    }

    public function unfollow(User $user) {
        $this->user->following()->detach($user);
    }
    public function render()
    {
        return view('livewire.follow-user');
    }
}
