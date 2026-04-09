<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Project;
use App\MoonShine\Pages\Project\ProjectDetailPage;
use App\MoonShine\Pages\Project\ProjectFormPage;
use App\MoonShine\Pages\Project\ProjectIndexPage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Project, ProjectIndexPage, ProjectFormPage, ProjectDetailPage>
 */
class ProjectResource extends ModelResource
{
    protected string $model = Project::class;

    public function getTitle(): string
    {
        return __('admin.projects.title');
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            ProjectIndexPage::class,
            ProjectFormPage::class,
            ProjectDetailPage::class,
        ];
    }

    /**
     * @param  Project  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
