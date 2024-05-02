<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required|email|min:8|max:25|ends_with:@gmail.com|unique:users,email')]
    public $email;

    #[Validate('required|min:8|max:25')]
    public $password;

    #[Validate('required|same:password')]
    public $confirmPassword;

    public function submit()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $user->customer()->create();

        auth()->loginUsingId($user->id);

        return redirect()->intended(route('app.login'));
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
