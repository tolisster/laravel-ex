<?php

namespace App\Policies;

use App\User;
use App\Logo;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given logo.
     *
     * @param  User  $user
     * @param  Logo  $logo
     * @return bool
     */
    public function destroy(User $user, Logo $logo)
    {
        return $user->id == $logo->user_id;
    }
}
