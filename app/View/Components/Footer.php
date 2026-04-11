<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
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
                'url' => '#about'
            ],
            [
                'label' => 'Services',
                'url' => '#services'
            ],
            [
                'label' => 'Process',
                'url' => '#our-process'
            ],
            // [
            //     'label' => 'Case Studies',
            //     'url' => '#'
            // ],
            // [
            //     'label' => 'Blog',
            //     'url' => '#blog'
            // ],
            [
                'label' => 'Contact',
                'url' => '#contacts'
            ],
        ];

        $socials = [
            [
                'label' => 'Linkedin',
                'icon' => 'linkedin',
                'url' => '#'
            ],
            [
                'label' => 'Twitter',
                'icon' => 'twitter',
                'url' => '#'
            ],
            [
                'label' => 'Medium',
                'icon' => 'medium',
                'url' => '#'
            ],
            
        ];

        $siteinfo = [
            [
                'label' => 'Terms of Use',
                'url' => '#'
            ],
            [
                'label' => 'Privacy Policy',
                'url' => route('privacy-policy')
            ]
        ];

        return view('components.footer', compact('menu', 'socials', 'siteinfo'));
    }
}
