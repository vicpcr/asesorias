@extends('layouts.template')

@section('title', 'Concluir Asesoria - UTCAM')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Concluir Asesoría</div>

                @if ($errors->any())

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <u1>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </u1>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container py-4">
                        <form action="{{ url('asesoriasA/'.$asesoria->id) }}" method="post">
                            @method("PUT")
                            @csrf
                
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">Matricula:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="matri" id="matri" value="{{ $asesoria->matricula }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="fecha" class="col-sm-2 col-form-label">Fecha para la asesoria:</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $asesoria->fecha }}" >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="telefono" class="col-sm-2 col-form-label">Alumnos reprobados:</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="reprobados" id="reprobados" value="{{ $asesoria->alum_rep }}" >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nivel" class="col-sm-2 col-form-label">Asistencia:</label>
                                <div class="col-sm-5">
                                    <select name="asistencia" id="asistencia" class="form-select">
                                        <option value="">Selecciona la opción correspondiente</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">Resultado:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="resultado" id="resultado" value="{{ $asesoria->resultado }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nivel" class="col-sm-2 col-form-label">Tipo:</label>
                                <div class="col-sm-5">
                                    <select name="tipo" id="tipo" class="form-select">
                                        <option value="">Seleccione el tipo de asesoría correspondiente</option>
                                        <option value="CORRECTIVA">CORRECTIVA</option>
                                        <option value="PREVENTIVA">PREVENTIVA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">Observaciones:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ $asesoria->observaciones }}">
                                </div>
                            </div>

                            <div class="row-md 9">
                            <a href="{{ route('asesoriasA.index') }}" class="btn btn-secondary">Regresar</a>
                
                            <button type="submit" class="btn btn-success">Enviar Datos</button>
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection