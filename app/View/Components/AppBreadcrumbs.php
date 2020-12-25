<?php

namespace App\View\Components;

use App\Models\Organization;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppBreadcrumbs extends Component
{
    /**
     * @var Organization
     */
    public Organization $organization;

    /**
     * @var string
     */
    public string $lastLink;

    /**
     * Create a new component instance.
     *
     */
    public function __construct()
    {
        $this->organization = request()->user()->currentOrganization;

        if ($this->organization->id) {
            $array = explode('/', request()->getRequestUri());
            $end = end($array);

            $this->lastLink = ucfirst($end);
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
