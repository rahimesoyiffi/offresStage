<?php

namespace App\Policies;

use App\Offre;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OffrePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function view(User $user, Offre $offre)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function update(User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->email, [
            'admin@depotstage.com',
            'rsoyiffi12@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function restore(User $user, Offre $offre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function forceDelete(User $user, Offre $offre)
    {
        //
    }
}
