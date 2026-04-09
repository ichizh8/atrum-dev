<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\MoonShine\Pages\Seo\SeoDetailPage;
use App\MoonShine\Pages\Seo\SeoFormPage;
use App\MoonShine\Pages\Seo\SeoIndexPage;
use Leeto\Seo\Models\Seo;
use MoonShine\ImportExport\Contracts\HasImportExportContract;
use MoonShine\ImportExport\ImportHandler;
use MoonShine\ImportExport\ExportHandler;
use MoonShine\ImportExport\Traits\ImportExportConcern;
use MoonShine\Laravel\Handlers\Handler;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\PageType;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\ActionButton;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;

class SeoResource extends ModelResource implements HasImportExportContract
{
    use ImportExportConcern;

    protected string $model = Seo::class;

    public function getTitle(): string
    {
        return __('admin.seo.seo');
    }

    protected string $column = 'title';

    // protected bool $detailInModal = true;

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected function pages(): array
    {
        return [
            SeoIndexPage::class,
            SeoFormPage::class,
            SeoDetailPage::class,
        ];
    }

    protected function exportFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Url'),
            Text::make('Title'),
            Text::make('Description'),
            Text::make('Keywords'),
        ];
    }

    protected function importFields(): iterable
    {
        return $this->exportFields();
    }

    public function search(): array
    {
        return ['id', 'url', 'title'];
    }

    public function filters(): array
    {
        return [
            Text::make('Url'),
            Text::make('Title'),
        ];
    }

    public function import(): ?Handler
    {
        return ImportHandler::make('Import')
            ->notifyUsers(fn () => [auth()->id()]);
    }

    public function export(): ?Handler
    {
        return ExportHandler::make('Export')
            ->filename('seo_resource_export__'.date('Ymd-His'))
            ->dir('export_files')
            ->notifyUsers(fn () => [auth()->id()]);
    }

    public function indexButtons(): ListOf
    {
        return parent::indexButtons()->add(
            ActionButton::make('Page', static fn (Seo $item) => $item->url)
                ->icon('arrow-top-right-on-square')
                ->blank()
        );
    }
}
