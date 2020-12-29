<?php

namespace App\Http\Livewire;

use App\Actions\Rico\ApplicationAction;
use App\Models\Application;
use Illuminate\Auth\Access\AuthorizationException;
use Livewire\Component;

class PinnedApplication extends Component
{
    /**
     * @var Application
     */
    public Application $app;

    /**
     * Mount method
     *
     * @param Application $app
     */
    public function mount(Application $app)
    {
        $this->app = $app;
    }

    public function render()
    {
        return view('applications.livewire.pinned-app');
    }
}
