<?php

namespace App\Events\Models;

use App\Models\Organization;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

abstract class OrganizationEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The organization instance.
     *
     * @var Organization
     */
    public Organization $organization;

    /**
     * Create a new event instance.
     *
     * @param Organization $organization
     */
    public function __construct(Organization $organization)
    {
        $this->organization = $organization;
    }
}
