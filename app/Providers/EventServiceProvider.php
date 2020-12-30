<?php

namespace App\Providers;

use App\Events\ApplicationArchived;
use App\Events\ApplicationCreated;
use App\Events\ApplicationDeleted;
use App\Events\ApplicationOnline;
use App\Events\ApplicationPaused;
use App\Events\ApplicationPinned;
use App\Events\ApplicationUnarchived;
use App\Events\ApplicationUnpinned;
use App\Events\ApplicationUpdated;
use App\Listeners\ApplicationArchivedListener;
use App\Listeners\ApplicationCreatedListener;
use App\Listeners\ApplicationDeletedListener;
use App\Listeners\ApplicationUpdatedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ApplicationCreated::class => [
            ApplicationCreatedListener::class
        ],
        ApplicationUpdated::class => [
            ApplicationUpdatedListener::class
        ],
        ApplicationDeleted::class => [
            ApplicationDeletedListener::class
        ],
        ApplicationArchived::class => [
            ApplicationArchivedListener::class
        ],
        ApplicationUnarchived::class => [
            //
        ],
        ApplicationOnline::class => [
            //
        ],
        ApplicationPaused::class => [
            //
        ],
        ApplicationPinned::class => [
            //
        ],
        ApplicationUnpinned::class => [
            //
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
