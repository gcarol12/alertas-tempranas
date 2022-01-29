@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                               <h1> {{ __('Tutela') }}</h1>
                            </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-6">
                            <label for="Ingresar-radicado" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/VySFrZw.jpg" width=" 50vw" title="proceso"> </label>

                            <div class="col-md-8">
                                <input id="Ingresar-radicado" type="text" class="form-control" name="Ingresar-radicado" placeholder="Nº radicado SENA" required>
                            </div>  
                        </div>
                        <div class="row mb-6">
                            <label for="Ingresar-fecha" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/UGz4PAr.jpg" width=" 50vw" title="calendario"/></label>

                            <div class="col-md-8">
                            <input  id="Ingresar-fecha" class="form-control"  type="text" name="Ingresar-fecha" placeholder="Fecha de radicación SENA" 
                                    onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                            
                            </div>  
                        </div>

                        <div class="row mb-6">
                            <label for="Ingresar-nombre" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/OoStcBs.jpg" width=" 50vw" title="usuario"/></label>

                            <div class="col-md-8">
                                <input id="Ingresar-nombre" type="text" class="form-control" name="Ingresar-nombre" placeholder="Nombre del accionante" required>
                            </div>  
                        </div>

                        <div class="row mb-6">
                            <label for="Ingresar-nit" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/J8bMNoj.jpg" width=" 50vw" title="perfil"/></label>

                            <div class="col-md-8">
                                <input id="Ingresar-nit" type="text" class="form-control" name="Ingresar-nit" placeholder="NIT del accionante" required>
                            </div>  
                        </div>

                        <div class="row mb-6">
                            <label for="email" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/lf6TIiN.jpg" width=" 50vw" title="email"/> </label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-MAIL del accionante" required>
                            </div>  
                        </div>

                        <div class="row mb-2">
                            <label for="select" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">                                
                                <select name="select" class="form-control"  required>
                                    <option selected value="0">  {{ __('Seleccione responsable') }}
                                    
                                        <option value="1"> {{ Auth::user()->name }}</option>
                                            
                                    </option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Cancelar') }}
                                </button>
                                
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                                
                            </div>
                        </div> 

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
