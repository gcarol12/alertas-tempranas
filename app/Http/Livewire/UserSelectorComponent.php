<?php

namespace App\Http\Livewire;

use App\Models\Regional;
use App\Models\User;
use App\Models\Departamento;
use Livewire\Component;

class UserSelectorComponent extends Component
{
    public function render()
    {
        return view('livewire.user-selector-component', [
            "users" => User::all(),
        ]);
    }
}

