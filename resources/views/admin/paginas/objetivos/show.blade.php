@extends('layouts.app')

@section('titulo')
    Veículo: {{ $veiculo->modelo->modelo }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('veiculos.index') }}">Veículos</a></li>
    <li class="breadcrumb-item active">Veículo: {{ $veiculo->modelo->modelo }}</li>
@endsection

@section('conteudo')

    <div class="card">
        <div class="card-header pb-0">
            <h5>Veículo: {{ $veiculo->modelo->modelo }}</h5><span>Veja as informações do veículo: {{ $veiculo->modelo->modelo }}</span>
        </div>
        <div class="card-body">
            <p><strong>Veículo: </strong>{{ $veiculo->modelo->modelo }}</p>
            <p><strong>Descrição:</strong> {{ $veiculo->descricao ?? 'Não cadastrada' }}</p>

            <form action="{{ route('veiculos.destroy', $veiculo->uuid) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir o veículo <strong>{{ $veiculo->modelo->modelo }}</strong></button>
            </form>
        </div>
    </div>
@endsection
