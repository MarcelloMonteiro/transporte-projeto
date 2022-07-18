@extends('layouts.app')

@section('titulo')
    Cadastrar Tipo de Situação
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tipos-situacao.index') }}">Tipos de Situaçãos</a></li>
    <li class="breadcrumb-item active">Cadastrar Tipo de Situação</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Cadastrar Tipo de Situação</h5><span>Faça o cadastro de novos tipos</span>
        </div>
        <div class="card-body">
            <form action="{{ route('tipos-situacao.store') }}" method="post">
                @csrf
                @include('admin.paginas.tipos-situacoes._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
