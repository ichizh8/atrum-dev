<?php

namespace App\View\Components\UiComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public string $variant;
    public string $size;
    public string $href;
    public string $wireClick;
    public string $xClick;
    public string $click;
    public string $class;
    public function __construct(string $class = '', string $variant = 'primary', string $size = 'md', string $href = '', string $wireClick = '', string $xClick = '', string $click = '')
    {
        $this->variant = $variant;
        $this->size = $size;
        $this->href = $href;
        $this->wireClick = $wireClick;
        $this->xClick = $xClick;
        $this->click = $click;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui-components.button');
    }
}
