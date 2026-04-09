<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Project;

use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\EasyMde\Fields\Markdown;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use Throwable;

class ProjectDetailPage extends DetailPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make(__('admin.project.title'), 'title')->required(),
            Image::make(__('admin.project.preview'), 'preview')
                ->disk('public')
                ->allowedExtensions(['jpg', 'jpeg', 'png'])
                ->removable()
                ->required(),
            Markdown::make(__('admin.project.description'), 'description')->required(),
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
