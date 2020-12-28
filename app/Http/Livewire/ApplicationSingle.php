<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;

class ApplicationSingle extends Component
{
    public Application $app;


    public function mount(Application $app)
    {
        $this->app = $app;
    }


    public function render()
    {
        return view('applications.livewire.application-single');
    }
}
