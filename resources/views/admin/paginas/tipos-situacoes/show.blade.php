@extends('layouts.app')

@section('titulo')
    Tipos de Situação: {{ $tipo->tipo }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tipos-situacao.index') }}">Tipos de Situaçãos</a></li>
    <li class="breadcrumb-item active">Tipo de Situação: {{ $tipo->tipo }}</li>
@endsection

@section('conteudo')

    <div class="card">
        <div class="card-header pb-0">
            <h5>Tipos de Situação: {{ $tipo->tipo }}</h5><span>Veja as informações do tipo: {{ $tipo->tipo }}</span>
        </div>
        <div class="card-body">
            <p><strong>Tipos de Situação: </strong>{{ $tipo->tipo }}</p>
            <p><strong>Descrição:</strong> {{ $tipo->descricao ?? 'Não cadastrada' }}</p>

            <form action="{{ route('tipos-situacao.destroy', $tipo->uuid) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir o tipo <strong>{{ $tipo->tipo }}</strong></button>
            </form>
        </div>
    </div>
@endsection
