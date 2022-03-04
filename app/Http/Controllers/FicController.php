<?php

namespace App\Http\Controllers;

use App\Models\Fic;
use App\Http\Requests\StoreFicRequest;
use App\Http\Requests\UpdateFicRequest;

class FicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('via.fic');
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
     * @param  \App\Http\Requests\StoreFicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFicRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'liquidacion'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $fic = new Fic;
        $fic->name = $request->name;  
        $fic->email = $request->email; 
        $fic->liquidacion = $request->liquidacion; 
        $fic->NIT = $request->NIT; 
        $fic->fecha = $request->fecha; 
        $fic->user_id = $request->user_id;     
        $fic->save();
        
        return view('via.fic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fic  $fic
     * @return \Illuminate\Http\Response
     */
    public function show(Fic $fic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fic  $fic
     * @return \Illuminate\Http\Response
     */
    public function edit(Fic $fic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFicRequest  $request
     * @param  \App\Models\Fic  $fic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFicRequest $request, Fic $fic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fic  $fic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fic $fic)
    {
        //
    }
}
