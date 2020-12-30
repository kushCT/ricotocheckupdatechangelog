<?php

namespace App\Notifications;

use App\Notifications\Models\ApplicationEvent;

class ApplicationUpdatedNotification extends ApplicationEvent
{
    protected string $applicationType = 'application.updated';
}
