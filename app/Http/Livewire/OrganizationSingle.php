<?php

namespace App\Http\Livewire;

use App\Models\Organization;
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

    public function changeOrganization($organizationId)
    {
        $organization = Organization::findOrFail($organizationId);

        if (! request()->user()->switchOrganization($organization)) {
            abort(403);
        }

        return redirect(route('account.applications.show', $organizationId), 303);
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.organization-single');
    }
}
