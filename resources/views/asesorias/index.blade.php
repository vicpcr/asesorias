@extends('layouts.template')

@section('title', 'Asesorias - UTCAM')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Asesorias Solicitadas - Alumno</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('asesorias.create') }}" class="btn btn-success btn-sm">Nueva Asesoria</a>
                    <br>

                    <div class="container py-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matricula</th>
                                    <th>Carrera</th>
                                    <th>Cuatrimestre</th>
                                    <th>Asignatura</th>
                                    <th>Unidad</th>
                                    <th>Asesor</th>
                                    <th>Fecha</th>
                                    <th>Estatus</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asesorias as $asesoria)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $asesoria->matricula }}</td>
                                    <td>{{ $asesoria->carrera->nombre }}</td>
                                    <td>{{ $asesoria->cuatrimestre }}</td>
                                    <td>{{ $asesoria->asignatura }}</td>
                                    <td>{{ $asesoria->unidad }}</td>
                                    <td>{{ $asesoria->asesor }}</td>
                                    <td>{{ $asesoria->fecha }}</td>
                                    <td>{{ $asesoria->estatus }}</td>
                                    <td>
                                        <form action="{{ route('asesorias.destroy', $asesoria->id) }}" method="post" onsubmit="return confirm('¿Desea cancelar la asesoria?')">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger btb-sm">Cancelar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection