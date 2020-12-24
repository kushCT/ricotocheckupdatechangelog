<?php

namespace App\Actions\Rico;

use App\Models\Organization;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateOrganization
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
            'personal_organization' => false,
        ]);
    }
}
