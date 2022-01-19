@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-6">
                                {{ __('Registrarse') }}
                            </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-6">
                            <label for="name" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/OoStcBs.jpg" width=" 50vw" title="usuario"/> </label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre completo" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="email" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/lf6TIiN.jpg" width=" 50vw" title="email"/> </label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail @sena o @misena" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">                                                                                  
                            <label for="title"class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/AFLbkBs.jpg" width=" 50vw" title="celular"/> </label>
                            
                            <div class="col-md-8">
                                <input type="text" name="title" id="title"class="form-control" placeholder="Celular">
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <label for="password" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/TYhofNS.jpg" width=" 50vw" title="contraseña"/> </label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/TYhofNS.jpg" width=" 50vw" title="contraseña"/> </label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-6">
                               <label for="email" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>

                            <div class="col-md-8">
                                <!--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Seleccione" name="email" value="{{ old('email') }}" required>-->
                                <select name="select" class="form-control"  required>
                                    <option selected value="0">  {{ __('Seleccione dependencia') }}
                                        <optgroup label="Regional Valle">
                                            <option value="1"> Vía Gubernativa </option>
                                            <option value="2"> Defensa Judicial </option>
                                            <option value="3"> Cobro coactivo </option>
                                    </option>
                                </select>
                            </div> 
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
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
