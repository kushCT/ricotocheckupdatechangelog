<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplicationIndex extends Component
{
    /**
     * @var bool
     */
    public $readyToLoad = false;

    /**
     * Event listener.
     *
     * @var string[]
     */
    protected $listeners = [
        'applicationArchived' => '$refresh',
        'applicationPinned' => '$refresh',
    ];


    public function loadPinned()
    {
        $this->readyToLoad = true;
    }

    /**
     * Render view.
     */
    public function render()
    {
        return view('applications.livewire.app-index', [
            'applications' => request()->user()->allApplication(),
            'pins' => $this->readyToLoad ? request()->user()->allPinnedApplication() : []
        ]);
    }
}
