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
     * @return View
     */
    public function render(): View
    {
        return view('applications.livewire.app-index', [
            'applications' => request()->user()->allApplication()
        ]);
    }
}
