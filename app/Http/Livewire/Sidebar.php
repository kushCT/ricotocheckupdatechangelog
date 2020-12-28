<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    /**
     * The component's listeners.
     *
     * @var array
     */
    protected $listeners = [
        //
    ];

    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.sidebar');
    }
}
