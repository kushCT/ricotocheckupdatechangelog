<?php

namespace App\Notifications;

use App\Notifications\Models\ApplicationEvent;

class ApplicationCreatedNotification extends ApplicationEvent
{
    protected string $applicationType = 'application.created';
}
