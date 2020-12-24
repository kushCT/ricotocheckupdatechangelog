<?php

namespace App\Models\Traits;

use App\Models\Application;

trait HasApplication
{
    /**
     * Get all of the project the user owns.
     */
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
