<?php

namespace App\Models\Traits;

use App\Models\Membership;
use App\Models\Application;

trait HasApplication
{
    /**
     * Get all of the applications the user owns or belongs to.
     */
    public function allApplication()
    {
        return $this->ownedApplications->merge($this->applications)->where('archived', false)->sortBy('name');
    }

    /**
     * Get all of the applications the user owns or belongs to.
     */
    public function allApplicationArchived()
    {
        return $this->ownedApplications->merge($this->applications)->where('archived', true)->sortBy('name');
    }

    /**
     * Get all of the application the user owns.
     */
    public function ownedApplications()
    {
        return $this->hasMany(Application::class);
    }

    /**
     * Get all of the applications the user belongs to.
     */
    public function applications()
    {
        return $this->belongsToMany(Application::class, Membership::class)
            ->withPivot('role')
            ->withTimestamps()
            ->as('membership');
    }

    /**
     * Determine if the user owns the given application.
     *
     * @param  mixed  $application
     * @return bool
     */
    public function ownsApplication($application): bool
    {
        return $this->id == $application->user_id;
    }

    /**
     * Determine if the user belongs to the given application.
     *
     * @param  mixed  $application
     * @return bool
     */
    public function belongsToApplication($application): bool
    {
        return $this->applications->contains(function ($o) use ($application) {
                return $o->id === $application->id;
            }) || $this->ownsApplication($application);
    }
}
