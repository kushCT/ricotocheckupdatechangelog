<?php

namespace App\Models\Traits;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Support\Collection;

trait HasUser
{
    /**
     * Get the owner of the application.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the application's users including its owner.
     *
     * @return Collection
     */
    public function allUsers(): Collection
    {
        return $this->users->merge([$this->owner]);
    }

    /**
     * Get all of the users that belong to the application.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, Membership::class)
            ->withPivot('role')
            ->withTimestamps()
            ->as('membership');
    }

    /**
     * Determine if the given user belongs to the application.
     *
     * @param User $user
     * @return bool
     */
    public function hasUser(User $user): bool
    {
        return $this->users->contains($user) || $user->ownsOrganization($this);
    }

    /**
     * Determine if the given email address belongs to a user on the application.
     *
     * @param string $email
     * @return bool
     */
    public function hasUserWithEmail(string $email): bool
    {
        return $this->allUsers()->contains(fn($user) => $user->email === $email);
    }

    /**
     * Remove the given user from the application.
     *
     * @param User $user
     * @return void
     */
    public function removeUser(User $user)
    {
        if ($user->current_application_id === $this->id) {
            $user->forceFill([
                'current_application_id' => null,
            ])->save();
        }

        $this->users()->detach($user);
    }

    /**
     * @return int
     */
    public function countMember(): int
    {
        return $this->owner()->count();
    }
}
