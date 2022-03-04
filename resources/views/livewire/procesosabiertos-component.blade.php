<div>
<div class="row md-6 form-group">
    <label for="tutela" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                           
        <div class="col-md-8">                                
            <select name="tutela" class="form-control" wire::change='listarTutelas($event,target,value)' required>>
                <option selected value="0">  {{ __('Seleccione tutela') }} </option>                           
                    @foreach ($tutelas as $tutela)
                        <option value="{{$tutela->id}}">{{$tutela->radicado}} </option>
                    @endforeach                  
            </select>
        </div>
    </div>

    <div class="row md-6 form-group">
    <label for="sancion" class="col-md-2 col-form-label text-md-right control-label"> <img src="https://i.imgur.com/ywDs8cM.jpg" width=" 50vw" title="seleccionar"/> </label>
                           
        <div class="col-md-8">                                
            <select name="sancion" class="form-control" wire::change='listarTutelas($event,target,value)' required>>
                <option selected value="0">  {{ __('Seleccione sanción') }} </option>                           
                    @foreach ($sancions as $sancion)
                        <option value="{{$sancion->id}}">{{$sancion->radicado}} </option>
                    @endforeach                  
            </select>
        </div>
    </div>
</div>

