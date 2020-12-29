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
        $this->forceFill([
            'status' => 'online'
        ])->save();
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
        $this->forceFill([
            'status' => 'paused'
        ])->save();
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
        $this->forceFill([
            'archived' => true
        ])->save();
    }

    /**
     * Unarchived application.
     */
    public function unarchived()
    {
        $this->forceFill([
            'archived' => false
        ])->save();
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
        $this->forceFill([
            'pinned' => true
        ])->save();
    }

    /**
     * Unpinned application.
     */
    public function unpinned()
    {
        $this->forceFill([
            'pinned' => false
        ])->save();
    }
}
