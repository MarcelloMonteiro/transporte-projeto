@extends('layouts.app')

@section('titulo')
    Editar Situação
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('situacoes.index') }}">Situações</a></li>
    <li class="breadcrumb-item active">Editar Situação</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Editar Situação</h5><span>Faça a edição da situação</span>
        </div>
        <div class="card-body">
            <form action="{{ route('situacoes.update', $situacao->uuid) }}" method="post">
                @csrf
                @method('PUT')
                @include('admin.paginas.situacoes._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
