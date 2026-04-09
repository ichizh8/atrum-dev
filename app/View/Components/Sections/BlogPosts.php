<?php

namespace App\View\Components\Sections;

use App\View\Components\SectionComponent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogPosts extends SectionComponent
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $posts = [
            [
                'image' => 'post-1.png',
                'title' => 'The True Cost of Poorly Planned Software (& How to Avoid It)',
            ],
            [
                'image' => 'post-2.png',
                'title' => 'Predictability in Digital: Making Data-Backed Decisions Instead of Guessing',
            ],
            [
                'image' => 'post-3.png',
                'title' => 'How to Build a System That Doesn’t Need Constant Fixing',
            ]
            
        ];
        return view('components.sections.blog-posts', compact('posts'));
    }
}
