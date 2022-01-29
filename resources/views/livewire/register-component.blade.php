<div>
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
                            <label for="phone" class="col-md-2 col-form-label text-md-right">  <img src="https://i.imgur.com/OoStcBs.jpg" width=" 50vw" title="phone"/> </label>

                            <div class="col-md-8">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="telefono" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                        <div class="row mb-6 form-group">
                            <label for="regional" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                                <div class="col-md-8">
                                <select name="regional" class="form-control" wire::change='listarDepartamentos($event,target,value)' required>
                                    <option selected value="0">  {{ __('Seleccione Regional') }} </option>
                                     @foreach ($regionales as $regional)
                                     <option value="{{$regional->id}}">{{$regional->name}} </option>
                                     @endforeach
                                </select>                       
                                </div>
                        </div>

                        <div class="row mb-6 form-group">
                            <label for="departamento" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                                <div class="col-md-8">
                                <select name="departamento_id" class="form-control" required>
                                    <option selected value="0">  {{ __('Seleccione Departamento') }} </option>
                                     @if ($departamentos)

                                        @foreach ($departamentos as $departamento)
                                            <option value="{{$departamento->id}}">{{$departamento->name}} </option>
                                        @endforeach

                                     @endif                                    
                                     
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
