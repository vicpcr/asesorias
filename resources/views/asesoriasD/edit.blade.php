@extends('layouts.template')

@section('title', 'Confirmar Asesoría - UTCAM')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Confirmar fecha para la asesoría</div>

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
                        <form action="{{ url('asesoriasD/'.$asesoria->id) }}" method="post">
                            @method("PUT")
                            @csrf

                            <div class="mb-3 row">
                                <label for="fecha" class="col-sm-2 col-form-label">Fecha para la asesoria:</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $asesoria->fecha }}" >
                                </div>
                            </div>

                            <div class="row-md 9">
                            <a href="{{ route('asesoriasD.index') }}" class="btn btn-secondary">Regresar</a>
                
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