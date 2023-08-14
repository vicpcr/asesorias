<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $asignaturas = Asignatura::all();
        return view('asignaturas.index', ['asignaturas' => $asignaturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asignaturas.create', ['carreras' => Carrera::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'carrera' => 'required',
            'cuatri' => 'required',
        ]);

        $asignatura = new Asignatura();
        $asignatura->nombre = $request->input('nombre');
        $asignatura->carrera_id = $request->input('carrera');
        $asignatura->cuatrimestre = $request->input('cuatri');
        $asignatura->save();

        return view("asignaturas.message", ['msg' => "Asignatura guardada exitosamente."]);
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
    public function edit($id)
    {
        $asignatura = Asignatura::find($id);
        return view('asignaturas.edit', ['asignatura' => $asignatura, 'carreras' => Carrera::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nombre' => 'required|max:255' . $id,
            'carrera' => 'required',
            'cuatri' => 'required',

        ]);

        $asignatura = Asignatura::find($id);
        $asignatura->nombre = $request->input('nombre');
        $asignatura->carrera_id = $request->input('carrera');
        $asignatura->cuatrimestre = $request->input('cuatri');
        $asignatura->save();

        return view("asignaturas.message", ['msg' => "Asignatura editada exitosamente."]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->delete();

        return view("asignaturas.message", ['msg' => "Asignatura eliminada exitosamente."]);
    }
}
