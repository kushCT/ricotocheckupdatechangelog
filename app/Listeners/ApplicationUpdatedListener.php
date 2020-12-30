<?php

namespace App\Listeners;

use App\Notifications\ApplicationUpdatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class ApplicationUpdatedListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(object $event)
    {
        Notification::send($event->user, new ApplicationUpdatedNotification($event->application));
    }
}
