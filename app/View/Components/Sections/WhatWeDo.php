<?php

namespace App\View\Components\Sections;

use App\View\Components\SectionComponent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhatWeDo extends SectionComponent
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $items = [
            [
                'image' => 'what-we-do-1.png',
                'title' => 'Agent systems that run your workflows.',
                'description' => 'Multi-agent pipelines that handle the tedious, high-volume work your team keeps putting off.',
            ],
            [
                'image' => 'what-we-do-2.png',
                'title' => 'Marketing and sales intelligence from your own data.',
                'description' => 'Lead scoring, customer segmentation, and content generation grounded in your CRM. Not a generic LLM guess.',
            ],
            [
                'image' => 'what-we-do-3.png',
                'title' => 'Data infrastructure for teams without a data team.',
                'description' => 'Analytics, dashboards, event tracking, and the plumbing underneath, built so you can answer your own questions.',
            ],
        ];
        return view('components.sections.what-we-do', compact('items'));
    }
}
