<?php

namespace App\Http\Controllers;

use App\Models\Tutela;
use App\Http\Requests\StoreTutelaRequest;
use App\Http\Requests\UpdateTutelaRequest;

class TutelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('via.tutela');
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
     * @param  \App\Http\Requests\StoreTutelaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutelaRequest $request)
    {            
         $this->validate($request,[
           'name'=>'required',
           'email'=>'required',
           'radicado'=>'required',
           'NIT'=>'required',
           'fecha'=>'required',
           'user_id'=>'required',
       
           ]);

       $tutela = new Tutela;
       $tutela->name = $request->name;  
       $tutela->email = $request->email; 
       $tutela->radicado = $request->radicado; 
       $tutela->NIT = $request->NIT; 
       $tutela->user_id = $request->userId;     
       $tutela->save();
       
       return "Guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutela  $tutela
     * @return \Illuminate\Http\Response
     */
    public function show(Tutela $tutela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutela  $tutela
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutela $tutela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutelaRequest  $request
     * @param  \App\Models\Tutela  $tutela
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutelaRequest $request, Tutela $tutela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutela  $tutela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutela $tutela)
    {
        //
    }
}
