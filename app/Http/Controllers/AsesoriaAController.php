<?php

namespace App\Http\Controllers;

use App\Models\Asesoria;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AsesoriaAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesorias = Asesoria::where('estatus', 'ACEPTADA')->get();
        return view('asesoriasA.index', ['asesorias' => $asesorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        return view('asesoriasA.edit', ['asesoria' => $asesoria, 'carreras' => Carrera::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'matri' => 'required|max:10',
            'fecha' => 'required|date',
            'reprobados' => 'required',
            'asistencia' => 'required',
            'tipo' => 'required',
            'observaciones' => 'required|max:255',
        ]);

        $asesoria = Asesoria::find($id);
        $asesoria->matricula = $request->input('matri');
        $asesoria->fecha = $request->input('fecha');
        $asesoria->alum_rep = $request->input('reprobados');
        $asesoria->asistencia = $request->input('asistencia');
        $asesoria->resultado = $request->input('resultado');
        $asesoria->tipo = $request->input('tipo');
        $asesoria->observaciones = $request->input('observaciones');
        $asesoria->estatus = "CONCLUIDA";
        $asesoria->save();

        return view("asesoriasA.message", ['msg' => "Asesoria concluida."]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
