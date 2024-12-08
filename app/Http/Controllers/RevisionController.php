<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('revision.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Falta Lógica
        return view('revision.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Requests
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Para crear el archivo, más tarde
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Falta lógica
        return view('revision.show',);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // Falta lógica
        return view('revision.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Https\Request $request
     * @param \App\Ticket $ticket
     * @return
     */
    public function update()
    {
        // Completar con logica
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //Completar con lógica
    }
}
