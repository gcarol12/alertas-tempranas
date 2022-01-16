@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="row justify-content-center">
                            <div class="col-md-3">
                                {{ __('FIC (Fondo de la Industria y Construcción)') }}
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
                                    <a class="btn md-auto center" href="{{ route('via.tutela') }}">
                                        {{ __('Nº de liquidación') }}
                                    </a>                               
                                </button>                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Buscar-proceso" class="col-md-4 col-form-label text-md-right">{{ __('logolupa') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('via/sancion') }}">
                                        {{ __('Fecha de liquidación') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('logoperfil') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control">
                                    <a class="btn md-auto center" href="{{ route('via/compensacion') }}">
                                         {{ __('Razón social') }}
                                    </a>  
                                </button>
                            </div>
                        </div>  
                        
                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via/fic') }}">
                                        {{ __('NIT') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via.recursos') }}">
                                        {{ __('') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via.insolvencia') }}">
                                        {{ __('') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via/autocargos') }}">
                                        {{ __('') }}
                                    </a>  
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="generar-reporte" class="col-md-4 col-form-label text-md-right">{{ __('logodocumento') }}</label>

                            <div class="col-md-6">
                                <button type="submit" class="form-control text-md-right">
                                    <a class="btn md-auto center" href="{{ route('via/pqrs') }}">
                                        {{ __('') }}
                                    </a>  
                                </button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Responsable del seguimiento') }}</label>

                            <div class="col-md-6">
                                <!--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Seleccione" name="email" value="{{ old('email') }}" required>-->
                                <select name="select" class="form-control"  required>
                                    <option selected value="0">  {{ __('Seleccione responsable') }}
                                        <optgroup label="Regional Valle">
                                            <option value="1"> lista de responsables adjudicados al departamento al cual pertenece usuario que crea registro </option>
                                            <option value="2"> Defensa Judicial </option>
                                            <option value="3"> Cobro coactivo </option>
                                    </option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
