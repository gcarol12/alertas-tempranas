@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                                <h1>{{ __('Recursos') }}</h1>
                            </div>
                    </div>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                             <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <form method="POST" action="{{ route('recursos.store') }}">
                        @csrf

                        <div class="row mb-6">
                            <label for="resolucion" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/VySFrZw.jpg" width=" 50vw" title="proceso"> </label>

                            <div class="col-md-8">
                                <input id="resolucion" type="text" class="form-control" name="resolucion" placeholder="Nº resolución de liquidación de cuota" required>
                            </div>  
                        </div>
                        
                        <div class="row mb-6">
                            <label for="fecha" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/UGz4PAr.jpg" width=" 50vw" title="calendario"/></label>

                            <div class="col-md-8">
                            <input  id="fecha" class="form-control"  type="text" name="fecha" placeholder="Fecha resolución de liquidación de cuota" 
                                    onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                            
                            </div>  
                        </div>

                        <div class="row mb-6">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/OoStcBs.jpg" width=" 50vw" title="usuario"/></label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Razón social" required>
                            </div>  
                        </div>

                        <div class="row mb-6">
                            <label for="NIT" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/J8bMNoj.jpg" width=" 50vw" title="perfil"/></label>

                            <div class="col-md-8">
                                <input id="NIT" type="text" class="form-control" name="NIT" placeholder="NIT" required>
                            </div>  
                        </div>

                        <div class="row mb-6">
                            <label for="email" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/lf6TIiN.jpg" width=" 50vw" title="email"/> </label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-MAIL" required>
                            </div>  
                        </div>

                        <div class="card-body">
                            @livewire('user-selector-component')
                        </div>
                                            
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">                               
                                                               
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
