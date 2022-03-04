<div>

<div class="row mb-6 form-group">
                            <label for="regional" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                                <div class="col-md-8">
                                <select name="regional" class="form-control" wire::change='listarDepartamentos($event,target,value)' required>
                                    <option value="0">  {{ __('Seleccione Regional') }} </option>
                                     @foreach ($regionals as $regional)
                                     <option value="{{$regional->id}}">{{$regional->name}} </option>
                                     @endforeach
                                </select>                       
                                </div>
                        </div>

                        <div class="row mb-6 form-group">
                            <label for="departamento" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                                <div class="col-md-8">
                                <select name="departamento_id" class="form-control">
                                    <option value="0">  {{ __('Seleccione Departamento') }} </option>
                                     @if ($departamentos)

                                        @foreach ($departamentos as $departamento)
                                            <option value="{{$departamento->id}}">{{$departamento->name}} </option>
                                        @endforeach

                                     @endif                                    
                                     
                                </select>                       
                                </div>
                        </div>

                        
    <div class="row md-6 form-group">
    <label for="user" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                           
        <div class="col-md-8">                                
            <select name="user" class="form-control" wire::change='listarUsers($event,target,value)' required>>
                <option selected value="0">  {{ __('Seleccione responsable') }} </option>                           
                @if ($users)
                @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}} </option>
                    @endforeach   

@endif               
            </select>
        </div>
    </div>
</div>





                                    
                                