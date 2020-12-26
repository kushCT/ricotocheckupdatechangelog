<?php

namespace App\Models\Traits;

trait HasProperty
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

    /**
     * Application is archived.
     *
     * @return bool
     */
    public function isArchived(): bool
    {
        return !!$this->archived;
    }

    /**
     * Archived application
     */
    public function archived()
    {
        tap($this)->update([
            'archived' => true
        ]);
    }

    /**
     * Unarchived application.
     */
    public function unarchived()
    {
        tap($this)->update([
            'archived' => false
        ]);
    }

    /**
     * Application is archived.
     *
     * @return bool
     */
    public function isPinned(): bool
    {
        return !!$this->pinned;
    }

    /**
     * Pinned application
     */
    public function pinned()
    {
        tap($this)->update([
            'pinned' => true
        ]);
    }

    /**
     * Unpinned application.
     */
    public function unpinned()
    {
        tap($this)->update([
            'pinned' => false
        ]);
    }
}
