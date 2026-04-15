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
                'description' => 'You\'re sitting on three years of CRM or ERP data nobody analyzes.',
            ],
            [
                'description' => 'Your marketing and ops teams burn hours on tasks that should be automated.',
            ],
            [
                'description' => 'You\'ve tried an AI pilot that never made it to production.',
            ],
        ];
        return view('components.sections.features-grid', compact('features'));
    }
}
