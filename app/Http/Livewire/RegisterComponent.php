<?php

namespace App\Http\Livewire;

use App\Models\Regional;
use App\Models\Departamento;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $departamentos ="";

    public function mount()
    {
    $this->departamentos = Departamento::where('regional_id', 1)->get();
    }
    
    public function render()
    {
        return view('livewire.register-component', [
            "regionals" => Regional::all(),
            "departamentos" => $this->departamentos,
        ]);        
    }

    public function listarDepartamentos($regional_id)
    {
    $this->departamentos = Departamento::where('regional_id', $regional_id)->get();
    }

    

}

