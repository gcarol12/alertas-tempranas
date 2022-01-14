@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                            <div class="col-md-3">
                            {{ __('Mi perfil') }}
                            </div>
                    </div>
                </div>

                <div class="card-body">                   
                    <form method="POST">
                        @csrf
                         
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre completo') }}</label>

                            <div class="col-md-6">
                                <h1 id="name" name="name" class="form-control">
                                    {{ Auth::user()->name }}
                                </h1>                                                          
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <h1 id="email" name="email" class="form-control">
                                    {{ Auth::user()->email }}
                                </h1>
                            </div>
                        </div>

                        <div class="row mb-3">                                                                                  
                            <label for="title"class="col-md-4 col-form-label text-md-right">Logo celular:</label>
                            
                            <div class="col-md-6">
                                <h1 id="email" name="email" class="form-control">
                                    {{ Auth::user()->email }}
                                </h1>
                            </div>
                        </div>

                        <div class="row mb-3">                                                                                  
                            <label for="title"class="col-md-4 col-form-label text-md-right">logoseleccion departamento</label>
                            
                            <div class="col-md-6">
                                <h1 id="email" name="email" class="form-control">
                                    {{ Auth::user()->email }}
                            </h1>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="Buscar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logocontraseña') }}</label>

                            <div class="col-md-6">
                                <a class="form-control" href="{{ route('posts.index') }}">
                                        {{ __('Cambiar contraseña') }}
                                </a>  
                           </div>
                        </div>                                                       
                      
                        <div class="row mb-3">
                            <label for="Buscar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logoseleccion') }}</label>

                            <div class="col-md-6">
                                <a class="form-control" href="{{ route('posts.index') }}">
                                        {{ __('Procesos abiertos') }}
                                </a>  
                           </div>
                        </div> 

                        <div class="row mb-3">
                            <label for="Buscar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logoseleccion') }}</label>

                            <div class="col-md-6">
                                <a class="form-control" href="{{ route('posts.index') }}">
                                        {{ __('procesos cerrados') }}
                                </a>  
                           </div>
                        </div>              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
