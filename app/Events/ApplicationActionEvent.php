<?php

namespace App\Events;

use App\Models\Application;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ApplicationActionEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The application instance.
     *
     * @var Application
     */
    public Application $app;

    /**
     * The application instance.
     *
     * @var User
     */
    public User $user;

    /**
     * Action.
     *
     * @var string
     */
    public string $action;

    /**
     * Create a new event instance.
     *
     * @param Application $application
     * @param User $user
     * @param string $action
     */
    public function __construct(Application $application, User $user, string $action)
    {
        $this->app = $application;
        $this->user = $user;
        $this->action = $action;
    }

    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs(): string
    {
        return $this->action;
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith(): array
    {
        return [
            'type' => 'notification',
            'acting_date' => now(),
            'action' => $this->action,
            'data' => [
                'id' => $this->app->id,
                'name' => $this->app->name,
                'status' => $this->app->status,
                'archived' => $this->app->archived,
                'pinned' => $this->app->pinned,
            ],
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return PrivateChannel
     */
    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel("App.Models.User.{$this->user->id}");
    }
}
