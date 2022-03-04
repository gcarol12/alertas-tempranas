@extends('layouts.appini')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                                <h1>{{ __('Iniciar sesión') }}</h1>
                            </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row md-6">
                            <label for="email" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/lf6TIiN.jpg" width=" 50vw" title="email"/>  </label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail institucional" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row md-6">
                            <label for="password" class="col-md-2 col-form-label text-md-right"> <img src="https://i.imgur.com/TYhofNS.jpg" width=" 50vw" title="contraseña"/> </label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row justify-content-center" align="center">
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center" align="center">
                            <div class="col-8">
                               @if (Route::has('password.request'))
                                <a class="btn mx-auto center" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidó su contraseña?') }}
                                    </a> 
                                @endif 
                            </div>
                        </div>
                        <div class="row justify-content-center" align="center">
                            <div class="col-6">
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>                        
                            </div>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">  
             
    <a class="navbar-brand " href="{{ url('home') }}">
       <img src="https://i.imgur.com/mwIHkUF.jpg" width=" 100%" align="center" title="logo alertas tempranas sin inicio de sesión" />
    </a>                                                
</div>

@endsection
