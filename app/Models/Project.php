<?php

namespace App\Models;

use App\Events\ProjectCreated;
use App\Events\ProjectDeleted;
use App\Events\ProjectUpdated;
use App\Models\Traits\HasProjectStatus;
use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, HasUuid, SoftDeletes, HasProjectStatus;

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
    protected $casts = [];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ProjectCreated::class,
        'updated' => ProjectUpdated::class,
        'deleted' => ProjectDeleted::class,
    ];

    /**
     * Project is archived.
     *
     * @return mixed
     */
    public function isArchived()
    {
        return $this->archived;
    }

    /**
     * Archived project
     */
    public function archived()
    {
        tap($this)->update([
            'archived' => true
        ]);
    }

    /**
     * Unarchived project.
     */
    public function unarchived()
    {
        tap($this)->update([
            'archived' => false
        ]);
    }
}
