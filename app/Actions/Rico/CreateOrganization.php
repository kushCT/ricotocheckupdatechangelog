<?php

namespace App\Actions\Rico;

use App\Models\Organization;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class CreateOrganization
{
    /**
     * Validate and create a new team for the given user.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return mixed
     */
    public function create($user, array $input)
    {
        Gate::forUser($user)->authorize('create', Organization::class);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
        ])->validateWithBag('createOrganization');

        return $user->ownedOrganizations()->create([
            'name' => $input['name'],
            'personal_team' => false,
        ]);
    }
}
