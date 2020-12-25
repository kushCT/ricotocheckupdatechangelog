<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrganizationIndex extends Component
{
    public function render()
    {
        return view('livewire.organization-index', [
            'organizations' => auth()->user()->allOrganization()
        ]);
    }
}
