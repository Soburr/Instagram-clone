<?php

namespace App\Policies;

use App\Models\Dashboard;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class DashboardPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Dashboard $dashboard) {
       return $user->id == $dashboard->user_id;
    }

}
