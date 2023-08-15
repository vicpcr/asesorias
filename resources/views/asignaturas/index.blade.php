@extends('layouts.template')

@section('title', 'Asignaturas - UTCAM')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Asignaturas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('asignaturas.create') }}" class="btn btn-success btn-sm">Nueva Asignatura</a>
                    <br>

                    <div class="container py-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre de la asignatura</th>
                                    <th>Carrera</th>
                                    <th>Cuatrimestre</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asignaturas as $asignatura)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $asignatura->nombre }}</td>
                                    <td>{{ $asignatura->carrera->nombre }}</td>
                                    <td>{{ $asignatura->cuatrimestre }}</td>
                                    <td><a href="{{ route('asignaturas.edit', $asignatura->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                                    <td>
                                        <form action="{{ route('asignaturas.destroy', $asignatura->id) }}" method="post" onsubmit="return confirm('¿Desea eliminar la asesoria?')">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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