<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ArchivedApplications extends Component
{
    /**
     * @var bool
     */
    public bool $readyToLoad = false;

    /**
     * Event listener.
     *
     * @var string[]
     */
    protected $listeners = [
        'applicationArchived' => '$refresh',
    ];

    /**
     *
     */
    public function loadArchived()
    {
        $this->readyToLoad = true;
    }

    /**
     * Render view.
     *
     * @return View
     */
    public function render(): View
    {
        return view('applications.livewire.archived-app', [
            'applications' => $this->readyToLoad ? request()->user()->allApplicationArchived() : []
        ]);
    }
}
