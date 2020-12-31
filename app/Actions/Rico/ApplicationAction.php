<?php

namespace App\Actions\Rico;

use App\Events\ApplicationActionEvent;
use App\Models\Application;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ApplicationAction
{
    /**
     * Validate and create a new team for the given user.
     *
     * @param array $input
     * @param $user
     * @return mixed
     * @throws AuthorizationException
     */
    public function create(array $input, $user)
    {
        Gate::forUser($user)->authorize('create', Application::class);

        //
    }

    /**
     * Online application.
     *
     * @param $application
     * @param $user
     * @return void
     * @throws AuthorizationException
     */
    public function online($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if (!$application->isOnline()) {
            $application->online();
        }

        ApplicationActionEvent::dispatch($application, $user, 'application.online');
    }

    /**
     * Paused application.
     *
     * @param $application
     * @param $user
     * @return void
     * @throws AuthorizationException
     */
    public function paused($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if (!$application->isPaused()) {
            $application->paused();
        }

        ApplicationActionEvent::dispatch($application, $user, 'application.paused');
    }

    /**
     * Archived application.
     *
     * @param $application
     * @param $user
     * @return void
     * @throws AuthorizationException
     */
    public function archived($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        DB::transaction(function () use ($application) {
            $application->paused();
            $application->unpinned();
            $application->archived();
        });

        ApplicationActionEvent::dispatch($application, $user, 'application.archived');
    }

    /**
     * Unarchived application.
     *
     * @param $application
     * @param $user
     * @return void
     * @throws AuthorizationException
     */
    public function unarchived($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if ($application->isArchived()) {
            $application->unarchived();
        }

        ApplicationActionEvent::dispatch($application, $user, 'application.unarchived');
    }

    /**
     * Pinned application.
     *
     * @param $application
     * @param $user
     * @return void
     * @throws AuthorizationException
     */
    public function pinned($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if (count($user->allPinnedApplication()) < 4) {
            if (!$application->isPinned()) {
                $application->pinned();
            }
        }

        ApplicationActionEvent::dispatch($application, $user, 'application.pinned');
    }

    /**
     * Unpinned application.
     *
     * @param $application
     * @param $user
     * @return void
     * @throws AuthorizationException
     */
    public function unpinned($application, $user)
    {
        Gate::forUser($user)->authorize('update', $application);

        if ($application->isPinned()) {
            $application->unpinned();
        }

        ApplicationActionEvent::dispatch($application, $user, 'application.unpinned');
    }
}
