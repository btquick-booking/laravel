<?php

namespace App\Livewire;

use App\Filament\Resources\ContactUsResource;
use App\Models\Admin;
use Livewire\Component;
use App\Models\ContactUs as Contact;
use Livewire\Attributes\Validate;
use App\Models\ContactUs as ModelsContactUs;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

class ContactUs extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required|email|min:8|max:25|ends_with:@gmail.com|unique:users,email')]
    public $email;
    #[Validate('required')]
    public $message;

    public function submit() {
        $this->validate();

        $ContactUs = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        Notification::make('contact')
        ->title('problems')
        ->body('new user send complaint')
        ->actions([
            Action::make('go to contact')
            ->url(ContactUsResource::getUrl())
        ])
        ->sendToDatabase(User::find(1));

        return redirect()->intended(route('app.home'));
    }



    public function render()
    {
        return view('livewire.contactus');
    }
}
