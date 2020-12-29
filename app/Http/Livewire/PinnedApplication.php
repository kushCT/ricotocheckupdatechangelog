<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PinnedApplication extends Component
{
    public $readyToLoad = false;

    protected $listeners = [
        'applicationArchived' => '$refresh',
        'applicationPinned' => '$refresh',
    ];

    public function loadPinned()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('applications.livewire.pinned-app', [
            'pins' => $this->readyToLoad ? request()->user()->allPinnedApplication() : []
        ]);
    }
}
