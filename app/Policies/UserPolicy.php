<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAdminDashboard(User $user): bool
    {
        return $user->role === 'admin';
    }
}
