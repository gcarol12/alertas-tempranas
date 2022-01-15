@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-3">
                                {{ __('Tutela') }}
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
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('nº radicado SENA') }}
                                    </a>                               
                                </button>                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Buscar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logolupa') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('Fecha de radicación SENA') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('logoperfil') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                         {{ __('Nombre del accionante') }}
                                    </a>  
                                </button>
                            </div>
                        </div>  
                        
                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('NIT') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('E-MAIL del accionante') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('Respuesta TUTELA 10 dias') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Impugnacion') }}</label>

                            <div class="col-md-6">
                                <!--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Seleccione" name="email" value="{{ old('email') }}" required>-->
                                <select name="select" class="form-control"  required>
                                    <option selected value="0">  {{ __('¿Impugnación?') }}
                                        <optgroup label="selccione">
                                            <option value="1"> si </option>
                                            <option value="2"> no </option>                                                                                </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ ('') }}">
                                        {{ __('Fallo segunda instancia 10 dias') }}
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
