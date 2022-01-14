@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-3">
                                {{ __('Menú principal') }}
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

                        <div class="row mb-3">
                            <label for="Ingresar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logoarchivo') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">                                 
                                    <a class="btn md-auto center" href="{{ route('posts.index') }}">
                                        {{ __('Ingresar proceso') }}
                                    </a>                               
                                </button>                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Buscar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logolupa') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('posts.index') }}">
                                        {{ __('Buscar proceso') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('logoperfil') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('profile', 'user()->id') }}">
                                         {{ __('Mi perfil') }}
                                    </a>  
                                </button>
                            </div>
                        </div>  
                        
                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('posts.index') }}">
                                        {{ __('Generar reporte') }}
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
