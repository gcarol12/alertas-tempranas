@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                                <h1>{{ __('Proceso a Ingresar') }} </h1>
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

                        <div class="row mb-2">
                            <label for="Ingresar-proceso" class="col-md-2 col-form-label text-md-right">
                            </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">                                 
                                    <a class="btn md-auto center" href="{{ route('via.tutela') }}">
                                        {{ __('Tutela') }}
                                    </a>                               
                                </button>                                
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="Buscar-proceso" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('via/sancion') }}">
                                        {{ __('Sanción') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                    
                        <div class="row mb-2">
                            <label for="perfil" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('via/compensacion') }}">
                                         {{ __('Compensación') }}
                                    </a>  
                                </button>
                            </div>
                        </div>  
                        
                        <div class="row mb-2">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via/fic') }}">
                                        {{ __('FIC') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via.recursos') }}">
                                        {{ __('Recursos') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via.insolvencia') }}">
                                        {{ __('Insolvencia') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via/autocargos') }}">
                                        {{ __('Auto de cargos') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via/pqrs') }}">
                                        {{ __('PQRS') }}
                                    </a>  
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