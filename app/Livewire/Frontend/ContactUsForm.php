<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\ContactUs;

class ContactUsForm extends Component
{
    public $name;
    public $email;
    public $contact_no;
    public $message;

    public $successMessage = false;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'contact_no' => 'required',
        'message' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.frontend.contact-us-form');
    }

    public function submitForm()
    {
        $validatedData = $this->validate();

        ContactUs::create($validatedData);

        $this->reset();

        $this->successMessage = true;
    }
}
