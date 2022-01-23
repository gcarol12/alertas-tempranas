@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                                <h1>{{ __('Compensación') }}<h1>
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
                            <label for="Ingresar-proceso" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/VySFrZw.jpg" width=" 50vw" title="proceso"/></label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">                                 
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('Nº resolución sanción SENA') }}
                                    </a>                               
                                </button>                                
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="Buscar-proceso" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/UGz4PAr.jpg" width=" 50vw" title="calendario"/> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('Fecha de resolución sanción SENA') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                    
                        <div class="row mb-6">
                            <label for="perfil" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/OoStcBs.jpg" width=" 50vw" title="usuario"/></label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                         {{ __('Razón social') }}
                                    </a>  
                                </button>
                            </div>
                        </div>  
                        
                        <div class="row mb-6">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/J8bMNoj.jpg" width=" 50vw" title="perfil"/></label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('NIT') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/lf6TIiN.jpg" width=" 50vw" title="email"/> </label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('E-MAIL') }}
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
