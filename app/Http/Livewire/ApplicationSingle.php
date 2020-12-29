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

    /**
     * @param $status
     */
    public function changeStatus($status)
    {
        if ($status === 'online') {
            try {
                (new ApplicationAction())->online($this->app, request()->user());
            } catch (AuthorizationException $e) {
                dd($e);
            }
        } else {
            try {
                (new ApplicationAction())->paused($this->app, request()->user());
            } catch (AuthorizationException $e) {
                dd($e);
            }
        }
    }


    public function render()
    {
        return view('applications.livewire.app-single');
    }
}
