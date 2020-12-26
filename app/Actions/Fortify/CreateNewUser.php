<?php

namespace App\Actions\Fortify;

use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @throws ValidationException
     *
     * @return User
     */
    public function create(array $input): User
    {
        /**
         * Input validation.
         */
        Validator::make($input, [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'organization_name' => ['required', 'string', Rule::unique(Application::class, 'name')]
        ])->validate();

        /**
         * Create user and organization.
         */
        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) use ($input) {
                $this->createOrganization($user, $input['organization_name']);
            });
        });
    }
}
