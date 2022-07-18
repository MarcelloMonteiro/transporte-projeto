@extends('layouts.app')

@section('titulo')
    Modelo: {{ $modelo->modelo }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('modelos.index') }}">Modelos</a></li>
    <li class="breadcrumb-item active">Modelo: {{ $modelo->modelo }}</li>
@endsection

@section('conteudo')

    <div class="card">
        <div class="card-header pb-0">
            <h5>Modelo: {{ $modelo->modelo }}</h5><span>Veja as informações do modelo: {{ $modelo->modelo }}</span>
        </div>
        <div class="card-body">
            <p><strong>Modelo: </strong>{{ $modelo->modelo }}</p>
            <p><strong>Montadora: </strong>{{ $modelo->montadora->montadora }}</p>
            <p><strong>Descrição:</strong> {{ $modelo->descricao ?? 'Não cadastrada' }}</p>

            <form action="{{ route('modelos.destroy', $modelo->uuid) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir o modelo <strong>{{ $modelo->modelo }}</strong></button>
            </form>
        </div>
    </div>
@endsection
