<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Car  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Car $car)
    {
        return true;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->level >= User::AUTHOR_LEVEL;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Car  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Car $car)
    {
        if (!$car->exists){
            return $user->level >= User::AUTHOR_LEVEL;
        } else {
            return $user->level == User::AUTHOR_LEVEL && $user->id == $car->user_id
                || $user->level == User::ADMIN_LEVEL;
        }

    }

    public function list(User $user, Car $car)
    {
        if (!$car->exists){
            return $user->level >= User::AUTHOR_LEVEL;
        } else {
            return $user->level == User::AUTHOR_LEVEL && $user->id == $car->user_id
                || $user->level == User::ADMIN_LEVEL;
        }

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Car  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Car $car)
    {
        return $user->level == User::AUTHOR_LEVEL && $user->id == $car->user_id
            || $user->level == User::ADMIN_LEVEL && $car->exists;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Car  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Car $car)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Car  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Car $car)
    {
        //
    }

    
}
