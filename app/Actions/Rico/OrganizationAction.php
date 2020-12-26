<?php

namespace App\Actions\Rico;

use App\Events\ApplicationArchived;
use App\Events\ApplicationIsOnline;
use App\Events\ApplicationIsPaused;
use App\Events\ApplicationUnarchived;
use App\Events\ApplicationUnpinned;
use App\Models\Application;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;

class OrganizationAction
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
        Gate::forUser($user)->authorize('create', Application::class);

        //
    }

    /**
     * Online application.
     *
     * @param $application
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function online($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if (!$application->isOnline()) {
            $application->online();
        }

        ApplicationIsOnline::dispatch($application, $user);
    }

    /**
     * Paused application.
     *
     * @param $application
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function paused($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if (!$application->isPaused()) {
            $application->paused();
        }

        ApplicationIsPaused::dispatch($application, $user);
    }

    /**
     * Archived application.
     *
     * @param $application
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function archived($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        DB::transaction(function () use ($application) {
            $application->paused();
            $application->archived();
        });

        ApplicationArchived::dispatch($application, $user);
    }

    /**
     * Unarchived application.
     *
     * @param $application
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function unarchived($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if ($application->isArchived()) {
            $application->unarchived();
        }

        ApplicationUnarchived::dispatch($application, $user);
    }

    /**
     * Pinned application.
     *
     * @param $application
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function pinned($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if (!$application->isPinned()) {
            $application->pinned();
        }

        ApplicationArchived::dispatch($application, $user);
    }

    /**
     * Unpinned application.
     *
     * @param $application
     * @param $user
     *
     * @return void
     * @throws AuthorizationException
     */
    public function unpinned($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if ($application->isPinned()) {
            $application->unpined();
        }

        ApplicationUnpinned::dispatch($application, $user);
    }
}
