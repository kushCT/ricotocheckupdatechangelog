<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppNavigation extends Component
{
    /**
     * @var \Illuminate\Routing\Route|object|string|null
     */
    public $slug;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->slug = request()->route('slug');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-navigation');
    }
}
