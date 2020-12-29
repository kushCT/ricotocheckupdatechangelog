<?php

namespace App\Http\Livewire;

use App\Actions\Rico\ApplicationAction;
use App\Models\Application;
use Illuminate\Auth\Access\AuthorizationException;
use Livewire\Component;

class ApplicationSingle extends Component
{
    public Application $app;


    public function mount(Application $app)
    {
        $this->app = $app;
    }

    public function paused(Application $application)
    {
        try {
            (new ApplicationAction())->paused($application, request()->user());
        } catch (AuthorizationException $e) {
            dd($e);
        }
    }


    public function render()
    {
        return view('applications.livewire.app-single');
    }
}
