<?php

namespace App\Notifications\Models;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;

abstract class ApplicationEvent extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var Application
     */
    public Application $app;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Application type.
     *
     * @var string
     */
    protected string $applicationType = 'application';

    /**
     * Create a new notification instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Get the type of the notification being broadcast.
     *
     * @return string
     */
    public function broadcastType()
    {
        return $this->applicationType;
    }

    /**
     * Get the broadcaster representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'type' => $this->applicationType,
            'acting_date' => now(),
            'data' => [
                'id' => $this->app->id,
                'name' => $this->app->id,
                'status' => $this->app->status,
                'archived' => $this->app->archived,
                'pinned' => $this->app->pinned,
            ],
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'type' => $this->applicationType,
            'data' => $this->app
        ];
    }
}
