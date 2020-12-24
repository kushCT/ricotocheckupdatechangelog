<?php


namespace App\Models\Traits;


use App\Models\Profile;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasProfile
{
    /**
     * @return HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
