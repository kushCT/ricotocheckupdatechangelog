<?php

namespace App\Models;

use App\Models\Traits\HasProperty;
use App\Models\Traits\HasUser;
use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Rackbeat\UIAvatars\HasAvatar;

class Application extends Model
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;
    use HasUser;
    use HasProperty;
    use HasAvatar;
    use Notifiable;

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
        'archived' => 'boolean',
        'pinned' => 'boolean',
    ];

    /**
     * Purge all of the application's resources.
     *
     * @return void
     * @throws \Exception
     */
    public function purge()
    {
        $this->users()->detach();

        $this->delete();
    }
}
