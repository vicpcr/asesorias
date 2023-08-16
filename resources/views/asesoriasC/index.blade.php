@extends('layouts.template')

@section('title', 'Asesorias Concluidas - Docente - UTCAM')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Asesorías Concluidas - Docente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container py-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matricula</th>
                                    <th>Fecha</th>
                                    <th>Alumnos reprobados</th>
                                    <th>Asistencia</th>
                                    <th>Resultado</th>
                                    <th>Tipo</th>
                                    <th>Observaciones</th>
                                    <th>Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asesorias as $asesoria)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $asesoria->matricula }}</td>
                                    <td>{{ $asesoria->fecha }}</td>
                                    <td>{{ $asesoria->alum_rep }}</td>
                                    <td>{{ $asesoria->asistencia }}</td>
                                    <td>{{ $asesoria->resultado }}</td>
                                    <td>{{ $asesoria->tipo }}</td>
                                    <td>{{ $asesoria->observaciones }}</td>
                                    <td>{{ $asesoria->estatus }}</td>
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