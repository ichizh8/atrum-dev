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
                'title' => 'Discovery Sprint',
                'duration' => 'Three weeks',
                'description' => 'We map your data, your workflows, and the highest-leverage AI opportunity. You get a working prototype and an implementation plan. You leave with clarity, whether or not you continue with us.',
            ],
            [
                'title' => 'Embedded Quarter',
                'duration' => 'Twelve weeks',
                'description' => 'We embed two to three people with your team. We build, your team learns. At the end you have production AI systems and people who know how to maintain them.',
            ],
            [
                'title' => 'Ongoing Partnership',
                'duration' => 'Retainer',
                'description' => 'We stay on after the embed as a fractional AI team. Weekly sessions, async ownership, a ticket queue your team can push into.',
            ],
        ];

        return view('components.sections.our-process', compact('steps'));
    }
}
