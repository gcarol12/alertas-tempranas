<?php

namespace App\Http\Controllers;

use App\Models\Compensacion;
use App\Http\Requests\StoreCompensacionRequest;
use App\Http\Requests\UpdateCompensacionRequest;

class CompensacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('via.compensacion');
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
     * @param  \App\Http\Requests\StoreCompensacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompensacionRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'resolucion'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $compensacion = new Compensacion;
        $compensacion->name = $request->name;  
        $compensacion->email = $request->email; 
        $compensacion->resolucion = $request->resolucion; 
        $compensacion->NIT = $request->NIT; 
        $compensacion->fecha = $request->fecha; 
        $compensacion->user_id = $request->user_id;     
        $compensacion->save();
        
        return view('via.compensacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compensacion  $compensacion
     * @return \Illuminate\Http\Response
     */
    public function show(Compensacion $compensacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compensacion  $compensacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Compensacion $compensacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompensacionRequest  $request
     * @param  \App\Models\Compensacion  $compensacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompensacionRequest $request, Compensacion $compensacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compensacion  $compensacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compensacion $compensacion)
    {
        //
    }
}
