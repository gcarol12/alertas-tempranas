@extends('layouts.appini')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" align="center">
                    <h1>{{ __('Verify Your Email Address') }}</h1>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
