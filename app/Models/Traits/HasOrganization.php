<?php

namespace App\Models\Traits;

use App\Models\Membership;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasOrganization
{
    /**
     * Determine if the given organization is the current organization.
     *
     * @param  mixed  $organization
     * @return bool
     */
    public function isCurrentOrganization($organization)
    {
        return $organization->id === $this->currentOrganization->id;
    }

    /**
     * Get the current organization of the user's context.
     */
    public function currentOrganization(): BelongsTo
    {
        if (is_null($this->current_organization_id) && $this->id) {
            $this->switchOrganization($this->personalOrganization());
        }

        return $this->belongsTo(Organization::class, 'current_organization_id');
    }

    /**
     * Switch the user's context to the given organization.
     *
     * @param $organization
     * @return bool
     */
    public function switchOrganization(Organization $organization): bool
    {
        if (! $this->belongsToOrganization($organization)) {
            return false;
        }

        $this->forceFill([
            'current_organization_id' => $organization->id,
        ])->save();

        $this->setRelation('currentOrganization', $organization);

        return true;
    }

    /**
     * Get all of the organizations the user owns or belongs to.
     *
     * @return Collection
     */
    public function allOrganization(): Collection
    {
        return $this->ownedOrganizations->merge($this->organizations)->sortBy('name');
    }

    /**
     * Last view organization.
     *
     * @return Collection
     */
    public function lastViewOrganization(): Collection
    {
        $this->allOrganization()->sortByDesc('last_view')
            ->take(5)
            ->sortBy('name');
    }

    /**
     * Get all of the organization the user owns.
     */
    public function ownedOrganizations(): HasMany
    {
        return $this->hasMany(Organization::class);
    }

    /**
     * Get all of the organizations the user belongs to.
     */
    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(Organization::class, Membership::class)
            ->withPivot('role')
            ->withTimestamps()
            ->as('membership');
    }

    /**
     * Get the user's "personal" organization.
     *
     * @return Organization
     */
    public function personalOrganization(): Organization
    {
        return $this->ownedOrganizations->where('personal_organization', true)->first();
    }

    /**
     * Determine if the user owns the given organization.
     *
     * @param  mixed  $organization
     * @return bool
     */
    public function ownsOrganization($organization): bool
    {
        return $this->id == $organization->user_id;
    }

    /**
     * Determine if the user belongs to the given organization.
     *
     * @param  mixed  $organization
     * @return bool
     */
    public function belongsToOrganization($organization): bool
    {
        return $this->organizations->contains(function ($o) use ($organization) {
                return $o->id === $organization->id;
            }) || $this->ownsOrganization($organization);
    }
}
