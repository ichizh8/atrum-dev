<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\ContactUsRequest;

use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

class ContactUsRequestIndexPage extends IndexPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Text::make(__('admin.contact_us.client_name'), 'client_name')->required(),
            Text::make(__('admin.contact_us.client_email'), 'client_email')->required(),
            Text::make(__('admin.contact_us.client_phone'), 'client_phone')->required(),
            Textarea::make(__('admin.contact_us.client_message'), 'client_message'),
            Date::make(__('admin.contact_us.created_at'), 'created_at'),
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
