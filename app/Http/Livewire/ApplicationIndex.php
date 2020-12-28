<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplicationIndex extends Component
{
    public function render()
    {
        return view('applications.livewire.application-index', [
            'applications' => request()->user()->allApplication()
        ]);
    }
}
