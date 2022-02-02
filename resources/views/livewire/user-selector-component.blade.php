<div>
    <div class="row md-6 form-group">
    <label for="user" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                           
        <div class="col-md-8">                                
            <select name="user" class="form-control" wire::change='listarUsers($event,target,value)' required>>
                <option selected value="0">  {{ __('Seleccione responsable') }} </option>                           
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}} </option>
                    @endforeach                  
            </select>
        </div>
    </div>
</div>





                                    
                                