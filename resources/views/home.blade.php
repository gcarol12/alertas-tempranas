@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                               <h1> {{ __('Menú principal') }} <img src="https://i.imgur.com/gHXDACk.jpg" width=" 50vw" title="home" /></h1>
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
                            <label for="Ingresar-proceso" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/VySFrZw.jpg" width=" 50vw" title="proceso"/></label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">                                 
                                    <a class="btn md-auto center" href="{{ route('posts.index') }}">
                                        {{ __('Ingresar proceso') }}
                                    </a>                               
                                </button>                                
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="Buscar-proceso" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/rV8h4mk.jpg" width=" 50vw" title="buscar"/></label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('posts.index') }}">
                                        {{ __('Buscar proceso') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                    
                        <div class="row mb-6">
                            <label for="perfil" class="col-md-2 col-form-label text-md-right"><img src="https://i.imgur.com/J8bMNoj.jpg" width=" 50vw" title="perfil"/></label>

                            <div class="col-md-8">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('profile', 'user()->id') }}">
                                         {{ __('Mi perfil') }}
                                    </a>  
                                </button>
                            </div>
                        </div>  
                        
                        <div class="row mb-6">
                            <label for="generar-reporte" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/0q1B0eq.jpg" width=" 50vw" title="pdf"/></label>

                            <div class="col-md-8">
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
