<?php

namespace App\Http\Controllers;

use App\Models\Insolvencia;
use App\Http\Requests\StoreInsolvenciaRequest;
use App\Http\Requests\UpdateInsolvenciaRequest;

class InsolvenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insolvencia.tutela');
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
     * @param  \App\Http\Requests\StoreInsolvenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsolvenciaRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'liquidacion'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $insolvencia = new Insolvencia;
        $insolvencia->name = $request->name;  
        $insolvencia->email = $request->email; 
        $insolvencia->liquidacion = $request->liquidacion; 
        $insolvencia->NIT = $request->NIT; 
        $insolvencia->fecha = $request->fecha; 
        $insolvencia->user_id = $request->user_id;     
        $insolvencia->save();
        
        return view('insolvencia.tutela');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insolvencia  $insolvencia
     * @return \Illuminate\Http\Response
     */
    public function show(Insolvencia $insolvencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insolvencia  $insolvencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Insolvencia $insolvencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsolvenciaRequest  $request
     * @param  \App\Models\Insolvencia  $insolvencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsolvenciaRequest $request, Insolvencia $insolvencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insolvencia  $insolvencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insolvencia $insolvencia)
    {
        //
    }
}
