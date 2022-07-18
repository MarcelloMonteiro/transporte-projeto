@extends('layouts.app')

@section('titulo')
    Editar Categoria
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('categorias-habilitacao.index') }}">Categorias de Habilitação</a></li>
    <li class="breadcrumb-item active">Editar Categoria</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Editar Categoria</h5><span>Faça a edição das categorias</span>
        </div>
        <div class="card-body">
            <form action="{{ route('categorias-habilitacao.update', $categoria->uuid) }}" method="post">
                @csrf
                @method('PUT')
                @include('admin.paginas.categorias-habilitacao._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
