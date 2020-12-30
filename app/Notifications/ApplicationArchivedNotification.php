<?php

namespace App\Notifications;

use App\Notifications\Models\ApplicationEvent;

class ApplicationArchivedNotification extends ApplicationEvent
{
    protected string $applicationType = 'application.archived';
}
