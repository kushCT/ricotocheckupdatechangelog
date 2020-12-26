<?php

namespace App\Models;

use App\Events\ApplicationCreated;
use App\Events\ApplicationDeleted;
use App\Events\ApplicationUpdated;
use App\Models\Traits\HasApplicationStatus;
use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;
use phpDocumentor\Reflection\Types\Boolean;

class Application extends Model
{
    use HasFactory, HasUuid, SoftDeletes, HasApplicationStatus;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
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

    /**
     * @return string
     */
    public function nameInitial(): string
    {
        return (new InitialAvatar())
            ->name($this->name)
            ->rounded()
            ->fontSize(0.35)
            ->generateSvg()
            ->toXMLString();
    }
}
