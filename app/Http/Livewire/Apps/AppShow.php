<?php

namespace App\Http\Livewire\Apps;

use App\Models\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AppShow extends Component
{
    /**
     * @var Application
     */
    public Application $application;

    /**
     * @param Application $application
     */
    public function mount(Application $application)
    {
        $this->application = $application;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function render()
    {
        return view('apps.show');
    }
}
