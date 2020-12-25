<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class OrganizationSingle extends Component
{
    /**
     * @var mixed
     */
    public $organization;

    /**
     * @param $organization
     */
    public function mount($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.organization-single');
    }
}
