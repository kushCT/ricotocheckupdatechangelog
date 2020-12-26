<?php

namespace App\Actions\Rico;

use App\Models\Application;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class OrganizationAction
{
    /**
     * Validate and create a new team for the given user.
     *
     * @param mixed $user
     * @param array $input
     * @return mixed
     * @throws AuthorizationException|ValidationException
     */
    public function create($user, array $input)
    {
        Gate::forUser($user)->authorize('create', Organization::class);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
        ])->validateWithBag('createOrganization');

        return $user->ownedOrganizations()->create([
            'name' => $input['name'],
            'slug' => Str::slug($input['name']),
            'personal_organization' => false,
        ]);
    }

    /**
     * Create project.
     *
     * @param User $user
     * @param Organization $organization
     * @param array $input
     *
     * @return mixed
     * @throws AuthorizationException|ValidationException
     */
    public function createApplication(User $user, Organization $organization, array $input)
    {
        Gate::forUser($user)->authorize('create', Application::class);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
        ])->validateWithBag('createOrganizationApplication');

        return $organization->applications()->create([
            'name' => $input['name'],
            'status' => 'online'
        ]);
    }
}
