<?php

namespace App\Repositories;

use App\User;

class LogoRepository
{
    /**
     * Get all of the logos for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->logos()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
