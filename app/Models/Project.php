<?php

namespace App\Models;

use App\Events\ProjectArchived;
use App\Events\ProjectUnarchived;
use App\Models\Traits\HasProjectStatus;
use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, HasUuid, SoftDeletes, HasProjectStatus;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

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
