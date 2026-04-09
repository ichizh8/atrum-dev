<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menu = [
            [
                'label' => 'About',
                'anchor' => 'about'
            ],
            [
                'label' => 'Services',
                'anchor' => 'services'
            ],
            [
                'label' => 'Process',
                'anchor' => 'our-process'
            ],
            // [
            //     'label' => 'Case Studies',
            //     'anchor' => 'case-studies'
            // ],
            // [
            //     'label' => 'Blog',
            //     'anchor' => 'blog'
            // ],
            [
                'label' => 'Contact',
                'anchor' => 'contacts'
            ],
        ];
        
        return view('components.header', compact('menu'));
    }
}
