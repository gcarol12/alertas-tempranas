<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use App\Http\Requests\StorePqrsRequest;
use App\Http\Requests\UpdatePqrsRequest;

class PqrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('via.pqrs');
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
     * @param  \App\Http\Requests\StorePqrsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePqrsRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'radicado'=>'required',
            'NIT'=>'required',
            'fecha'=>'required',
            'user_id'=>'required',
        
            ]);
 
        $pqrs = new Pqrs;
        $pqrs->name = $request->name;  
        $pqrs->email = $request->email; 
        $pqrs->radicado = $request->radicado; 
        $pqrs->NIT = $request->NIT; 
        $pqrs->fecha = $request->fecha; 
        $pqrs->user_id = $request->user_id;     
        $pqrs->save();
        
        return view('via.pqrs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pqrs  $pqrs
     * @return \Illuminate\Http\Response
     */
    public function show(Pqrs $pqrs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pqrs  $pqrs
     * @return \Illuminate\Http\Response
     */
    public function edit(Pqrs $pqrs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePqrsRequest  $request
     * @param  \App\Models\Pqrs  $pqrs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePqrsRequest $request, Pqrs $pqrs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pqrs  $pqrs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pqrs $pqrs)
    {
        //
    }
}
