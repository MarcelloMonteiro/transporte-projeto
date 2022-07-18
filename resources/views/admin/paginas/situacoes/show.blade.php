@extends('layouts.app')

@section('titulo')
    Situação: {{ $situacao->situacao }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('situacoes.index') }}">Situaçãos</a></li>
    <li class="breadcrumb-item active">Tipo de Situação: {{ $situacao->situacao }}</li>
@endsection

@section('conteudo')

    <div class="card">
        <div class="card-header pb-0">
            <h5>Situação: {{ $situacao->situacao }}</h5><span>Veja as informações do situacao: {{ $situacao->situacao }}</span>
        </div>
        <div class="card-body">
            <p><strong>Situação:</strong> {{ $situacao->situacao }}</p>
            <p><strong>Tipo de Situação:</strong> {{ $situacao->tipo->tipo }}</p>
            <p><strong>Descrição:</strong> {{ $situacao->descricao ?? 'Não cadastrada' }}</p>

            <form action="{{ route('situacoes.destroy', $situacao->uuid) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir o situacao <strong>{{ $situacao->situacao }}</strong></button>
            </form>
        </div>
    </div>
@endsection
