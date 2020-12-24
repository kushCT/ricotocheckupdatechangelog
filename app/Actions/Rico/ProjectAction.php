<?php

namespace App\Actions\Rico;

use App\Events\ProjectArchived;
use App\Events\ProjectIsOnline;
use App\Events\ProjectIsPaused;
use App\Events\ProjectUnarchived;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ProjectAction
{
    /**
     * Create project.
     *
     * @param $organization
     * @param array $input
     *
     * @return mixed
     */
    public function create($organization, array $input)
    {
        //
    }

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

        ProjectIsOnline::dispatch($project, $user);
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

        ProjectIsPaused::dispatch($project, $user);
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

        ProjectArchived::dispatch($project, $user);
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

        ProjectUnarchived::dispatch($project, $user);
    }
}
