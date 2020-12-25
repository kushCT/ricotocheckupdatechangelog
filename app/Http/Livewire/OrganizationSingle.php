<?php

namespace App\Http\Livewire;

use App\Models\Organization;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class OrganizationSingle extends Component
{
    /**
     * @var mixed
     */
    public $organization;

    public $isCurrentOrganization;

    /**
     * @param $organization
     */
    public function mount($organization)
    {
        $this->organization = $organization;

        $this->isCurrentOrganization = request()->user()->isCurrentOrganization(
            $this->organization
        );
    }

    /**
     * Change organization.
     *
     * @param $organizationId
     * @return Application|RedirectResponse|Redirector
     */
    public function changeOrganization($organizationId)
    {
        $organization = Organization::findOrFail($organizationId);

        if (! request()->user()->switchOrganization($organization)) {
            abort(403);
        }

        return redirect(route('account.applications.index', $organization->slug), 303);
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.organization-single');
    }
}
