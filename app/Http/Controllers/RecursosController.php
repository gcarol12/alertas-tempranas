<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use App\Http\Requests\StoreRecursosRequest;
use App\Http\Requests\UpdateRecursosRequest;

class RecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('via.recursos');
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
     * @param  \App\Http\Requests\StoreRecursosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecursosRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'resolucion'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $recursos = new Recursos;
        $recursos->name = $request->name;  
        $recursos->email = $request->email; 
        $recursos->resolucion = $request->resolucion; 
        $recursos->NIT = $request->NIT; 
        $recursos->fecha = $request->fecha; 
        $recursos->user_id = $request->user_id;     
        $recursos->save();
        
        return view('via.recursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function show(Recursos $recursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function edit(Recursos $recursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecursosRequest  $request
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecursosRequest $request, Recursos $recursos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recursos $recursos)
    {
        //
    }
}
