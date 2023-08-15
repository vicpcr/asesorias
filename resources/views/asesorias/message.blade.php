@extends('layouts/template')

@section('title', 'Operación completada | Asesorias - UTCAM')

@section('content')

<main>
    <div class="container py-4">
        <div class="text-center">
            <h2>{{ $msg }}</h2>
        </div>
        <a href="{{ route('asesorias.index') }}" class="btn btn-success">Regresar</a>
    </div>
</main>

@endsection