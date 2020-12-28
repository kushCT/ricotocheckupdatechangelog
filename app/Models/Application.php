<?php

namespace App\Models;

use App\Events\ApplicationCreated;
use App\Events\ApplicationDeleted;
use App\Events\ApplicationUpdated;
use App\Models\Traits\HasProperty;
use App\Models\Traits\HasUser;
use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rackbeat\UIAvatars\HasAvatar;

class Application extends Model
{
    use HasFactory, HasUuid, SoftDeletes, HasUser, HasProperty, HasAvatar;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'personal_application',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'personal_application' => 'boolean',
        'archived' => 'boolean',
        'pinned' => 'boolean',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ApplicationCreated::class,
        'updated' => ApplicationUpdated::class,
        'deleted' => ApplicationDeleted::class,
    ];

    /**
     * Purge all of the application's resources.
     *
     * @return void
     * @throws \Exception
     */
    public function purge()
    {
        $this->owner()->where('current_application_id', $this->id)
            ->update(['current_application_id' => null]);

        $this->users()->where('current_application_id', $this->id)
            ->update(['current_application_id' => null]);

        $this->users()->detach();

        $this->delete();
    }
}
