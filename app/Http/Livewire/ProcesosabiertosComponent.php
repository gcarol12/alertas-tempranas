<?php

namespace App\Http\Livewire;

use App\Models\Tutela;
use App\Models\Sancion;
use App\Models\Compensacion;
use App\Models\Fic;
use App\Models\Recursos;
use App\Models\Insolvencia;
use App\Models\Autocargos;
use App\Models\Pqrs;
use App\Models\Regional;
use App\Models\User;
use App\Models\Departamento;
use Livewire\Component;

class ProcesosabiertosComponent extends Component
{
    public function render()
    {
        return view('livewire.procesosabiertos-component', [
            "tutelas" => Tutela::all(),
            "sancions" => Sancion::all(),
        ]);
        
    }
}
