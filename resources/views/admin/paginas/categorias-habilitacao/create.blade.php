@extends('layouts.app')

@section('titulo')
    Cadastrar Categoria
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('categorias-habilitacao.index') }}">Categorias</a></li>
    <li class="breadcrumb-item active">Cadastrar Categoria</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Cadastrar Categoria</h5><span>Faça o cadastro de novas categorias</span>
        </div>
        <div class="card-body">
            <form action="{{ route('categorias-habilitacao.store') }}" method="post">
                @csrf
                @include('admin.paginas.categorias-habilitacao._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
