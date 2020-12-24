<?php

namespace App\Models\Traits;

trait HasApplicationStatus
{
    /**
     * Project is online.
     *
     * @return bool
     */
    public function isOnline(): bool
    {
        return $this->status === 'online';
    }

    /**
     * Change application status to online.
     */
    public function online()
    {
        tap($this)->update([
            'status' => 'online'
        ]);
    }

    /**
     * Project is paused.
     *
     * @return bool
     */
    public function isPaused(): bool
    {
        return $this->status === 'paused';
    }

    /**
     * Change application status to paused.
     */
    public function paused()
    {
        tap($this)->update([
            'status' => 'paused'
        ]);
    }
}
