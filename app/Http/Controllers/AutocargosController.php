<?php

namespace App\Http\Controllers;

use App\Models\Autocargos;
use App\Http\Requests\StoreAutocargosRequest;
use App\Http\Requests\UpdateAutocargosRequest;

class AutocargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('autocargos.tutela');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutocargosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutocargosRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'liquidacion'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $autocargos = new Autocargos;
        $autocargos->name = $request->name;  
        $autocargos->email = $request->email; 
        $autocargos->liquidacion = $request->liquidacion; 
        $autocargos->NIT = $request->NIT; 
        $autocargos->fecha = $request->fecha; 
        $autocargos->user_id = $request->user_id;     
        $autocargos->save();
        
        return view('autocargos.tutela');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autocargos  $autocargos
     * @return \Illuminate\Http\Response
     */
    public function show(Autocargos $autocargos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autocargos  $autocargos
     * @return \Illuminate\Http\Response
     */
    public function edit(Autocargos $autocargos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutocargosRequest  $request
     * @param  \App\Models\Autocargos  $autocargos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutocargosRequest $request, Autocargos $autocargos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autocargos  $autocargos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autocargos $autocargos)
    {
        //
    }
}
