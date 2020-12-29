<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArchivedApplications extends Component
{
    /**
     * @var bool
     */
    public bool $readyToLoad = false;

    /**
     *
     */
    public function loadArchived()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('applications.livewire.archived-app', [
            'applications' => $this->readyToLoad ? request()->user()->allApplicationArchived() : []
        ]);
    }
}
