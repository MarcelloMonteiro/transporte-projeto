@extends('layouts.app')

@section('titulo')
    Cadastrar Situação
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('situacoes.index') }}">Situações</a></li>
    <li class="breadcrumb-item active">Cadastrar Situação</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Cadastrar Situação</h5><span>Faça o cadastro de novas situações</span>
        </div>
        <div class="card-body">
            <form action="{{ route('situacoes.store') }}" method="post">
                @csrf
                @include('admin.paginas.situacoes._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
