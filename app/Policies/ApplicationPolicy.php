<?php

namespace App\Policies;

use App\Models\Application;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplicationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     *
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Application $application
     *
     * @return mixed
     */
    public function view(User $user, Application $application)
    {
        return $user->belongsToApplication($application);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     *
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Application $application
     *
     * @return mixed
     */
    public function update(User $user, Application $application)
    {
        return $user->ownsApplication($application);
    }

    /**
     * Determine whether the user can add application members.
     *
     * @param User $user
     * @param Application $application
     *
     * @return mixed
     */
    public function addApplicationMember(User $user, Application $application)
    {
        return $user->ownsApplication($application);
    }

    /**
     * Determine whether the user can update application member permissions.
     *
     * @param User $user
     * @param Application $application
     *
     * @return mixed
     */
    public function updateApplicationMember(User $user, Application $application)
    {
        return $user->ownsApplication($application);
    }

    /**
     * Determine whether the user can remove application members.
     *
     * @param User $user
     * @param Application $application
     *
     * @return mixed
     */
    public function removeApplicationMember(User $user, Application $application)
    {
        return $user->ownsApplication($application);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Application $application
     *
     * @return mixed
     */
    public function delete(User $user, Application $application)
    {
        return $user->ownsApplication($application);
    }
}
