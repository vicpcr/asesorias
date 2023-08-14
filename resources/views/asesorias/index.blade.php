@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Iniciar Asesoria</div>

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
                                    <th>Cuatrimestre</th>
                                    <th>Asignatura</th>
                                    <th>Asesor</th>
                                    <th>Fecha</th>
                                    <th>Unidad</th>
                                    <th>Estatus</th>
                                    <th>Carrera</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>4220010204</td>
                                    <td>9</td>
                                    <td>Extracción del conocimiento de bases de datos</td>
                                    <td>Ing. Rosa Lopez Soto</td>
                                    <td>14-08-2023-11:00</td>
                                    <td>4</td>
                                    <td>Pendiente</td>
                                    <td>Ing. en DyGS</td>
                                    <td><a href="" class="btn btn-success btn-sm">Editar</a></td>
                                    <td><a href="" class="btn btn-danger btn-sm">Eliminar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection