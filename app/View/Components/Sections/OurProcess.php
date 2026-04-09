<?php

namespace App\View\Components\Sections;

use App\View\Components\SectionComponent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurProcess extends SectionComponent
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $steps = [
            [
                'title' => 'Discovery & Research',
                'list' => [
                    'User behavior analysis, market fit, stakeholder alignment',
                    'UX audit of what exists and figuring out where things break down',
                ]
            ],
            [
                'title' => 'Architecture & AI Planning',
                'list' => [
                    'System design with scalability and security built in from the beginning',
                    'Deciding what gets handled by AI and what needs a person',
                ]
            ],
            [
                'title' => 'Build with Review Loops',
                'list' => [
                    'Development with code reviews and AI output auditing throughout',
                    'Security checks happen before code merges. Always.',
                ]
            ],
            [
                'title' => 'Measure and Iterate',
                'list' => [
                    'Analytics and performance baselines running from launch day',
                    'Post-launch monitoring, documented handoff, systems that keep working after we leave',
                ]
            ]
        ];

        return view('components.sections.our-process', compact('steps'));
    }
}
