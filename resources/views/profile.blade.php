@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                            <div class="col-md-6">
                            {{ __('Mi perfil') }} <img src="https://i.imgur.com/J8bMNoj.jpg" width=" 50vw" title="perfil" />
                            </div>
                    </div>
                </div>

                <div class="card-body">                   
                    <form method="POST">
                        @csrf
                         
                        <div class="row mb-6">
                            <label for="name" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/OoStcBs.jpg" width=" 50vw" title="usuario" /> </label>

                            <div class="col-md-8">
                                <h1 id="name" name="name" class="form-control">
                                    {{ Auth::user()->name }}
                                </h1>                                                          
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="email" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/lf6TIiN.jpg" width=" 50vw" title="email" /> </label>

                            <div class="col-md-8">
                                <h1 id="email" name="email" class="form-control">
                                    {{ Auth::user()->email }}
                                </h1>
                            </div>
                        </div>

                        <div class="row mb-6">                                                                                  
                            <label for="title"class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/AFLbkBs.jpg" width=" 50vw" title="celular" /> </label>
                            
                            <div class="col-md-8">
                                <h1 id="email" name="email" class="form-control">
                                    {{ Auth::user()->email }}
                                </h1>
                            </div>
                        </div>

                        <div class="row mb-6">                                                                                  
                            <label for="title"class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar" /> </label>
                            
                            <div class="col-md-8">
                                <h1 id="email" name="email" class="form-control">
                                    {{ Auth::user()->email }}
                            </h1>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <label for="Buscar-proceso" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/TYhofNS.jpg" width=" 50vw" title="contraseña" /> </label>

                            <div class="col-md-8">
                                <a class="form-control" href="{{ route('posts.index') }}">
                                        {{ __('Cambiar contraseña') }}
                                </a>  
                           </div>
                        </div>                                                       
                      
                        <div class="row mb-6">
                            <label for="Buscar-proceso" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar" /> </label>

                            <div class="col-md-8">
                                <a class="form-control" href="{{ route('posts.index') }}">
                                        {{ __('Procesos abiertos') }}
                                </a>  
                           </div>
                        </div> 

                        <div class="row mb-6">
                            <label for="Buscar-proceso" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> 
                            </label>

                            <div class="col-md-8">
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
