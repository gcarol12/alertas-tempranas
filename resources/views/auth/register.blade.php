@extends('layouts.appini')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-8" align="center">
                               <h1> {{ __('Registrarse') }}</h1>
                            </div>
                    </div>
                </div>

                <div class="card-body">
                @livewire('register-component')
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
