<?php

namespace App\Http\Controllers;

use App\Models\Asesoria;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AsesoriaDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesorias = Asesoria::where('estatus', 'PENDIENTE')->get();
        return view('asesoriasD.index', ['asesorias' => $asesorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asesoriasD.create', ['carreras' => Carrera::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asesoria = Asesoria::find($id);
        return view('asesoriasD.edit', ['asesoria' => $asesoria, 'carreras' => Carrera::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'fecha' => 'required|date',
        ]);
        
        
        $asesoria = Asesoria::find($id);
        $asesoria->fecha = $request->input('fecha');
        $asesoria->estatus = "ACEPTADA";
        $asesoria->save();

        return view("asesoriasD.message", ['msg' => "Asesoria aceptada exitosamente."]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
