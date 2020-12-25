<?php

namespace App\Events\Models;

use App\Models\Application;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

abstract class ApplicationEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The application instance.
     *
     * @var Application
     */
    public Application $application;

    /**
     * The application instance.
     *
     * @var User
     */
    public User $user;

    /**
     * Create a new event instance.
     *
     * @param Application $application
     * @param User|null $user
     */
    public function __construct(Application $application, User $user = null)
    {
        $this->application = $application;

        /**
         * If user exist set user.
         */
        if ($user) {
            $this->user = $user;
        }
    }
}
