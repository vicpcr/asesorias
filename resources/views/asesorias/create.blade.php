@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Asesoria</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('asesorias.index') }}" class="btn btn-success btn-sm">Regresar</a>
                    <br>

                    <div class="container py-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection