<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email|exists:users,email')]
    public $email;

    #[Validate('required')]
    public $password;

    public $remmeberMe = false;

    public function submit()
    {
        $this->validate();

        if (auth()->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->remmeberMe)) {
            if (auth()->user()->admin) {
                return redirect()->intended(route('filament.admin.pages.dashboard'));
            }
            if (auth()->user()->company) {
                return redirect()->intended(route('filament.company.pages.dashboard'));
            }

            return redirect()->intended(route('app.home'));
        }

        session()->flash(
            'email_error', 'The provided credentials do not match our records.',
        );
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
