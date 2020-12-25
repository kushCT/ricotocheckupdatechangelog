<?php

namespace App\Models;

use App\Events\OrganizationCreated;
use App\Events\OrganizationDeleted;
use App\Events\OrganizationUpdated;
use App\Models\Traits\HasApplication;
use App\Models\Traits\HasUuid;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Intervention\Image\Image;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;

class Organization extends Model
{
    use HasFactory, HasApplication, HasUuid, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'personal_organization',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'personal_organization' => 'boolean',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => OrganizationCreated::class,
        'updated' => OrganizationUpdated::class,
        'deleted' => OrganizationDeleted::class,
    ];

    /**
     * Get the owner of the organization.
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the organization's users including its owner.
     *
     * @return Collection
     */
    public function allUsers(): Collection
    {
        return $this->users->merge([$this->owner]);
    }

    /**
     * Get all of the users that belong to the organization.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, Membership::class)
            ->withPivot('role')
            ->withTimestamps()
            ->as('membership');
    }

    /**
     * Determine if the given user belongs to the organization.
     *
     * @param User $user
     * @return bool
     */
    public function hasUser(User $user): bool
    {
        return $this->users->contains($user) || $user->ownsOrganization($this);
    }

    /**
     * Determine if the given email address belongs to a user on the organization.
     *
     * @param string $email
     * @return bool
     */
    public function hasUserWithEmail(string $email): bool
    {
        return $this->allUsers()->contains(fn($user) => $user->email === $email);
    }

    /**
     * Remove the given user from the organization.
     *
     * @param User $user
     * @return void
     */
    public function removeUser(User $user)
    {
        if ($user->current_organization_id === $this->id) {
            $user->forceFill([
                'current_organization_id' => null,
            ])->save();
        }

        $this->users()->detach($user);
    }

    /**
     * Purge all of the organization's resources.
     *
     * @return void
     * @throws Exception
     */
    public function purge()
    {
        $this->owner()->where('current_organization_id', $this->id)
            ->update(['current_organization_id' => null]);

        $this->users()->where('current_organization_id', $this->id)
            ->update(['current_organization_id' => null]);

        $this->users()->detach();

        $this->delete();
    }


    public function nameInitial()
    {
        return (new InitialAvatar())
            ->name($this->name)
            ->rounded()
            ->fontSize(0.35)
            ->generateSvg()
            ->toXMLString();
    }
}
