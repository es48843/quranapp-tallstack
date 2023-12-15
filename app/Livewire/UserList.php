<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class UserList extends Component
{
    public function render(): View
    {
        return view('livewire.user-list', [
            'users' => User::all(),
        ]);
    }
}
