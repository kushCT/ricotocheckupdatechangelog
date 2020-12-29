<?php

namespace App\Models\Traits;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

trait HasProfile
{

    /**
     * Profile.
     *
     * @return HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    /**
     * @return bool
     */
    public function hasAvatar(): bool
    {
        return !!$this->profile->avatar;
    }

    /**
     * @return string
     */
    public function initial(): string
    {
        return $this->profile->getInitials(2);
    }

    /**
     * @return string
     */
    public function avatar(): string
    {
        return $this->profile->avatar;
    }
}
