<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    // property to use to pass data to the componet
    public $title;

     /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        //
        $this ->title=$data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
