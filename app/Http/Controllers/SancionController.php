<?php

namespace App\Http\Controllers;

use App\Models\Sancion;
use App\Http\Requests\StoreSancionRequest;
use App\Http\Requests\UpdateSancionRequest;

class SancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('via.sancion');
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
     * @param  \App\Http\Requests\StoreSancionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSancionRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'radicado'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $sancion = new Sancion;
        $sancion->name = $request->name;  
        $sancion->email = $request->email; 
        $sancion->radicado = $request->radicado; 
        $sancion->NIT = $request->NIT;
        $sancion->fecha = $request->fecha; 
        $sancion->user_id = $request->user_id;     
        $sancion->save();
        
        return view('via.sancion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sancion  $sancion
     * @return \Illuminate\Http\Response
     */
    public function show(Sancion $sancion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sancion  $sancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sancion $sancion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSancionRequest  $request
     * @param  \App\Models\Sancion  $sancion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSancionRequest $request, Sancion $sancion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sancion  $sancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sancion $sancion)
    {
        //
    }
}
