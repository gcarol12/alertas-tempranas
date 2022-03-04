<?php

namespace App\Http\Livewire;

use App\Models\Regional;
use App\Models\User;
use App\Models\Departamento;
use Livewire\Component;

class UserSelectorComponent extends Component
{
    public $users ="";

    public function mounts()
    {
    $this->users = Usuario::where('departamento_id', 1)->get();
    }
    
    public $departamentos ="";

    public function mount()
    {
    $this->departamentos = Departamento::where('regional_id', 1)->get();
    }
    
    public function render()
    {
        return view('livewire.user-selector-component', [
            "regionals" => Regional::all(),
            "departamentos" => $this->departamentos,
            "users" => $this->users,
        ]);        
    }

    public function listarDepartamentos($regional_id)
    {
    $this->departamentos = Departamento::where('regional_id', $regional_id)->get();
    }

    public function listarUsuarios($departamento_id)
    {
    $this->departamentos = Usuario::where('departamento_id', $departamento_id)->get();
    }

    

}
