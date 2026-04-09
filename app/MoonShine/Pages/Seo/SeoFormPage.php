<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Seo;

use Illuminate\Validation\Rule;
use Leeto\Seo\Rules\UrlRule;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

class SeoFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            Text::make(__('admin.seo.url'), 'url')->required(),
            Text::make(__('admin.seo.title'), 'title')->required(),
            Text::make(__('admin.seo.description'), 'description'),
            Text::make(__('admin.seo.keywords'), 'keywords'),
            Textarea::make(__('admin.seo.text'), 'text'),
        ];
    }

    protected function rules($item): array
    {
        return [
            'title' => [
                'required',
                'string',
                'min:3',
            ],
            'url' => [
                'required',
                'string',
                new UrlRule,
                Rule::unique('seo')->ignoreModel($item),
            ],
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer(),
        ];
    }
}
