<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ApplicationIndex extends Component
{
    /**
     * @var string[]
     */
    protected $listeners = [
        'applicationArchived' => '$refresh',
        'applicationPinned' => '$refresh',
    ];

    /**
     * Render view.
     *
     */
    public function render()
    {
        return view('applications.livewire.app-index', [
            'applications' => request()->user()->allApplication()
        ]);
    }
}
