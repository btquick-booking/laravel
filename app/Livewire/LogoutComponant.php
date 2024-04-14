<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class LogoutComponant extends Component
{

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.logout-componant');
    }
}
