<?php

namespace App\Notifications;

use App\Notifications\Models\ApplicationEvent;

class ApplicationDeletedNotification extends ApplicationEvent
{
    protected string $applicationType = 'application.deleted';
}
