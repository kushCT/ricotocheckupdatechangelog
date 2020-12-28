<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplicationIndex extends Component
{
    public function render()
    {
        return view('livewire.application-index', [
            'applications' => request()->user()->allApplication()
        ]);
    }
}
