<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PinnedApplication extends Component
{
    protected $listeners = [
        'applicationArchived' => '$refresh',
        'applicationPinned' => '$refresh',
    ];

    public function render()
    {
        return view('applications.livewire.pinned-app', [
            'pins' => request()->user()->allPinnedApplication()
        ]);
    }
}
