<?php

namespace App\Livewire\Modals;

use App\Models\ContactUsRequest;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class ContactUs extends ModalComponent
{
    #[Validate('required|min:3|max:255')]
    public string $client_name = '';

    #[Validate('required|email')]
    public string $client_email = '';

    #[Validate('required')]
    public string $client_phone = '';

    public string $client_message = '';

    #[Validate('accepted')]
    public bool $client_agree = false;

    public function updated($name, $value)
    {
        $this->resetValidation($name);
        $this->resetErrorBag($name);
        $this->validateOnly($name);
    }

    public function send()
    {
        $this->validate();

        $formRequest = ContactUsRequest::create([
            'client_name' => $this->client_name,
            'client_email' => $this->client_email,
            'client_phone' => $this->client_phone,
            'client_message' => $this->client_message,
        ]);

        $formRequest->save();

        $this->closeModal();
    }

    public function messages()
    {

        return [
            'client_name.required' => __('modals.contact_form.errors.client_name_required'),
            'client_name.min' => __('modals.contact_form.errors.client_name_min'),
            'client_name.max' => __('modals.contact_form.errors.client_name_max'),
            'client_email.required' => __('modals.contact_form.errors.client_email_required'),
            'client_email.email' => __('modals.contact_form.errors.client_email_email'),
            'client_agree.accepted' => __('modals.contact_form.errors.agreement_required'),
        ];
    }

    public function render()
    {
        return view('livewire.modals.contact-us');
    }
}
