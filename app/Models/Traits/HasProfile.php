<?php

namespace App\Models\Traits;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        return !!$this->avatar;
    }

    /**
     * @return string
     */
    public function initial(): string
    {
        return $this->profile->getInitials(2);
    }
}
