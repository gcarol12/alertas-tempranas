<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use App\Http\Requests\StoredepartamentoRequest;
use App\Http\Requests\UpdatedepartamentoRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoredepartamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredepartamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartamentoRequest  $request
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedepartamentoRequest $request, departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(departamento $departamento)
    {
        //
    }
}
