<?php

namespace App\Http\Controllers;

use App\Models\Asesoria;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AsesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesorias = Asesoria::all();
        return view('asesorias.index', ['asesorias' => $asesorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asesorias.create', ['carreras' => Carrera::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matri' => 'required|max:10',
            'carrera' => 'required',
            'cuatri' => 'required',
            'asignatura' => 'required|max:50',
            'unit' => 'required',
            'asesor' => 'required|max:50',
            'fecha' => 'required|date',
        ]);

        $asesoria = new Asesoria();
        $asesoria->matricula = $request->input('matri');
        $asesoria->carrera_id = $request->input('carrera');
        $asesoria->cuatrimestre = $request->input('cuatri');
        $asesoria->asignatura = $request->input('asignatura');
        $asesoria->unidad = $request->input('unit');
        $asesoria->asesor = $request->input('asesor');
        $asesoria->fecha = $request->input('fecha');
        $asesoria->estatus = "PENDIENTE";
        $asesoria->save();

        return view("asesorias.message", ['msg' => "Petición de asesoría exitosamente."]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asesoria = Asesoria::find($id);
        $asesoria->delete();

        return view("asesorias.message", ['msg' => "Asesoria cancelada exitosamente."]);
    }
}
