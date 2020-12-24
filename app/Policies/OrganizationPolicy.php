<?php

namespace App\Policies;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrganizationPolicy
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
     * @param Organization $organization
     *
     * @return mixed
     */
    public function view(User $user, Organization $organization)
    {
        return $user->belongsToOrganization($organization);
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
     * @param Organization $organization
     *
     * @return mixed
     */
    public function update(User $user, Organization $organization)
    {
        return $user->ownsOrganization($organization);
    }

    /**
     * Determine whether the user can add organization members.
     *
     * @param User $user
     * @param Organization $organization
     *
     * @return mixed
     */
    public function addOrganizationMember(User $user, Organization $organization)
    {
        return $user->ownsOrganization($organization);
    }

    /**
     * Determine whether the user can update organization member permissions.
     *
     * @param User $user
     * @param Organization $organization
     *
     * @return mixed
     */
    public function updateOrganizationMember(User $user, Organization $organization)
    {
        return $user->ownsOrganization($organization);
    }

    /**
     * Determine whether the user can remove organization members.
     *
     * @param User $user
     * @param Organization $organization
     *
     * @return mixed
     */
    public function removeOrganizationMember(User $user, Organization $organization)
    {
        return $user->ownsOrganization($organization);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Organization $organization
     *
     * @return mixed
     */
    public function delete(User $user, Organization $organization)
    {
        return $user->ownsOrganization($organization);
    }
}
