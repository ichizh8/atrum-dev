<?php

namespace App\View\Components\Sections;

use App\View\Components\SectionComponent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturesGrid extends SectionComponent
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $features = [
            [
                'title' => 'Quality over speed',
                'description' => 'Code gets reviewed. AI output gets audited. Nothing ships until someone who understands the system says it\'s ready.',
                'image' => 'feature-img-1.png',
            ],
            [
                'title' => 'AI with human oversight',
                'description' => 'We run multi-agent workflows for speed. But a human owns every decision and signs off on every merge.',
                'image' => 'feature-img-2.png',
            ],
            [
                'title' => 'Research before wireframes',
                'description' => 'UX patterns, cognitive biases, actual user behavior. We spend time here because it saves months later.',
                'image' => 'feature-img-3.png',
            ],
            [
                'title' => 'Distributed on purpose',
                'description' => 'US, Europe, Caucasus, Asia. Async culture, individual ownership of expertise, and people who genuinely like working this way.',
                'image' => 'feature-img-4.png',
            ],
            [
                'title' => 'Architecture that grows with you',
                'description' => 'We design systems for the version after next. Rework costs more than getting it right, and we\'ve learned that the hard way.',
                'image' => 'feature-img-5.png',
            ],
            [
                'title' => 'Security is how we work',
                'description' => 'We audit AI-generated code for vulnerabilities before it gets anywhere near production. This is part of the process, every time.',
                'image' => 'feature-img-6.png',
            ],
        ];
        return view('components.sections.features-grid', compact('features'));
    }
}
