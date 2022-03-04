<link href=https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css rel="stylesheet">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                            <div class="col-md-12" align="center">
                           <h1> {{ __('Mis procesos abiertos') }} <img src="https://i.imgur.com/J8bMNoj.jpg" width=" 50vw" title="perfil" /></h1> 
                            </div>
                    </div>
                </div>
                                   
               <!--<div class="card-body">
                    @livewire('procesosabiertos-component')                        
                </div>-->

        <div class="col-md-12" aling="center">               
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de tutelas</h1>
        </div>                             
        <livewire:datatable
            model="App\Models\Tutela"                                                
            searchable="radicado, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>

<div class="col-md-12" aling="center">               
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de sanción</h1>
        </div>                             
        <livewire:datatable
            model="App\Models\Sancion"                                                
            searchable="radicado, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>

<div class="col-md-12" aling="center">       
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de Compensación</h1>
    </div>                             
        <livewire:datatable
            model="App\Models\Compensacion"                                                
            searchable="resolucion, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>


<div class="col-md-12" aling="center">       
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de Fic</h1>
    </div>                             
        <livewire:datatable
            model="App\Models\Fic"                                                
            searchable="liquidacion, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>

<div class="col-md-12" aling="center">    
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de Recursos</h1>
    </div>                             
        <livewire:datatable
            model="App\Models\Recursos"                                                
            searchable="resolucion, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>  

<div class="col-md-12" aling="center">    
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de Insolvencia</h1>
    </div>                             
        <livewire:datatable
            model="App\Models\Insolvencia"                                                
            searchable="liquidacion, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>  

<div class="col-md-12" aling="center">    
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de Auto de cargos</h1>
    </div>                             
        <livewire:datatable
            model="App\Models\Autocargos"                                                
            searchable="liquidacion, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>

<div class="col-md-12" aling="center">    
        <h1 class="text-center font-blod text-grey-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500">Listado de Pqrs</h1>
    </div>                             
        <livewire:datatable
            model="App\Models\Pqrs"                                                
            searchable="radicado, fecha, name, nit, email, user_id"
            exportable
        >                            
</div>
        

            </div>
        </div>
    </div>
</div>
@endsection          