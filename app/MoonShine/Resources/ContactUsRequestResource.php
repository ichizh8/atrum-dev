<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\ContactFormRequest;
use App\Models\ContactUsRequest;
use App\MoonShine\Pages\ContactUsRequest\ContactUsRequestDetailPage;
use App\MoonShine\Pages\ContactUsRequest\ContactUsRequestIndexPage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<ContactFormRequest, ContactFormRequestIndexPage, ContactFormRequestFormPage, ContactFormRequestDetailPage>
 */
class ContactUsRequestResource extends ModelResource
{
    protected string $model = ContactUsRequest::class;

    // protected string $title = 'Contact form requests';
    public function getTitle(): string
    {
        return __('admin.contact_us_requests.title');
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            ContactUsRequestIndexPage::class,
            ContactUsRequestDetailPage::class,
        ];
    }

    /**
     * @param  ContactFormRequest  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
