<?php

namespace App\Models\Traits;

use App\Models\Application;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

trait HasApplication
{
    /**
     * Get all of the project the user owns.
     *
     * @return HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    /**
     * All application.
     *
     * @return Collection
     */
    public function allApplication(): Collection
    {
        return collect($this->applications)->sortBy('name');
    }

    /**
     * Pinned application.
     *
     * @return HasMany
     */
    public function pinnedApplications(): HasMany
    {
        return $this->applications()->where('pinned', '=', true);
    }

    /**
     * All pinned application.
     *
     * @return Collection
     */
    public function allPinnedApplication(): Collection
    {
        return collect($this->pinnedApplications)->sortByDesc('name');
    }
}
