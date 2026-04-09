<?php

namespace App\View\Components\Visuals;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GradientBgContainer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $class = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.visuals.gradient-bg-container');
    }
}
