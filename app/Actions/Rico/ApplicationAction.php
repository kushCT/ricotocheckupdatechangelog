<?php

namespace App\Actions\Rico;

use App\Events\ApplicationArchived;
use App\Events\ApplicationIsOnline;
use App\Events\ApplicationIsPaused;
use App\Events\ApplicationUnarchived;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ApplicationAction
{
    /**
     * Online project.
     *
     * @param $project
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function online($project, $user)
    {
        Gate::forUser($user)->authorize('update', $project);

        if (!$project->isOnline()) {
            $project->online();
        }

        ApplicationIsOnline::dispatch($project, $user);
    }

    /**
     * Paused project.
     *
     * @param $project
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function paused($project, $user)
    {
        Gate::forUser($user)->authorize('update', $project);

        if (!$project->isPaused()) {
            $project->paused();
        }

        ApplicationIsPaused::dispatch($project, $user);
    }

    /**
     * Archived project.
     *
     * @param $project
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function archived($project, $user)
    {
        Gate::forUser($user)->authorize('update', $project);

        DB::transaction(function () use ($project) {
            $project->paused();
            $project->archived();
        });

        ApplicationArchived::dispatch($project, $user);
    }

    /**
     * Unarchived project.
     *
     * @param $project
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function unarchived($project, $user)
    {
        Gate::forUser($user)->authorize('update', $project);

        if (!$project->isArchived()) {
            $project->unarchived();
        }

        ApplicationUnarchived::dispatch($project, $user);
    }
}
