<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $align;

    public $width;

    public $alignmentClasses;

    /**
     * Create a new component instance.
     *
     * @param $align
     * @param $width
     * @param $alignmentClasses
     */
    public function __construct($align, $width, $alignmentClasses = null)
    {
        $this->align = $align;
        $this->width = $width;
        $this->alignmentClasses = $alignmentClasses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
