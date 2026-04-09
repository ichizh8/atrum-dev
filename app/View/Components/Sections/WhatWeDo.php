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
                'title' => 'System Architecture & AI Integration',
                'list' => [
                    'Full-stack web and mobile development, designed to handle what comes after launch',
                    'API design and third-party integrations, documented so the next team can read them',
                    'AI module integration, from LLM pipelines to multi-agent orchestration to features that actually solve real problems',
                ]
            ],
            [
                'image' => 'what-we-do-2.png',
                'title' => 'UX Research & Design',
                'list' => [
                    'User behavior research, cognitive bias analysis, interaction pattern mapping',
                    'Information architecture, wireframing, interaction design',
                    'Usability testing with real users, then iterating based on what we actually find',
                ]
            ],
            [
                'image' => 'what-we-do-3.png',
                'title' => 'Data & Performance Intelligence',
                'list' => [
                    'Analytics infrastructure, event tracking, data warehousing',
                    'Custom dashboards and reporting pipelines, updated in real time',
                    'Pattern recognition and business intelligence for companies that never had access to this kind of tooling',
                ]
            ],
        ];
        return view('components.sections.what-we-do', compact('items'));
    }
}
