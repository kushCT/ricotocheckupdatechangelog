<?php

namespace App\View\Components;

use App\Models\Organization;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppBreadcrumbs extends Component
{
    public Organization $organization;

    /**
     * Create a new component instance.
     *
     * @param $organization
     */
    public function __construct(Organization $organization = null)
    {
        if ($organization) {
            $this->organization = $organization;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.app-breadcrumbs');
    }
}
