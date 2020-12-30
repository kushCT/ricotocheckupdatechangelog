<?php

namespace App\Notifications;

use App\Notifications\Models\ApplicationEvent;

class ApplicationUnarchivedNotification extends ApplicationEvent
{
    protected string $applicationType = 'application.unarchived';
}
