@extends('layouts.template')

@section('title', 'Nueva Asignatura - UTCAM')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Asignatura</div>

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
                        <form action="{{ route('asignaturas.store') }}" method="post">

                            @csrf
                
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre de la Asignatura:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}">
                                </div>
                            </div>
                
                            <div class="mb-3 row">
                                <label for="carrera" class="col-sm-2 col-form-label">Carrera:</label>
                                <div class="col-sm-5">
                                    <select name="carrera" id="carrera" class="form-select">
                                        <option value="">Seleccionar la carrera a la que pertenece</option>
                                        @foreach($carreras as $carrera)
                                        <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="telefono" class="col-sm-2 col-form-label">Cuatrimestre:</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="cuatri" id="cuatri" value="{{ old('cuatrimestre') }}" >
                                </div>
                            </div>

                            <div class="row-md 9">
                            <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary">Regresar</a>
                
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