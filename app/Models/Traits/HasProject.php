<?php

namespace App\Models\Traits;

use App\Models\Project;

trait HasProject
{
    /**
     * Get all of the project the user owns.
     */
    public function ownedProjects()
    {
        return $this->hasMany(Project::class);
    }
}
