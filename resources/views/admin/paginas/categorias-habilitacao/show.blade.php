@extends('layouts.app')

@section('titulo')
    Categoria: {{ $categoria->categoria }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('categorias-habilitacao.index') }}">Categorias</a></li>
    <li class="breadcrumb-item active">Categoria: {{ $categoria->categoria }}</li>
@endsection

@section('conteudo')

    <div class="card">
        <div class="card-header pb-0">
            <h5>Categoria: {{ $categoria->categoria }}</h5><span>Veja as informações da categoria: {{ $categoria->categoria }}</span>
        </div>
        <div class="card-body">
            <p><strong>Categoria: </strong>{{ $categoria->categoria }}</p>
            <p><strong>Descrição:</strong> {{ $categoria->descricao ?? 'Não cadastrada' }}</p>

            <form action="{{ route('categorias-habilitacao.destroy', $categoria->uuid) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir a categoria <strong>{{ $categoria->categoria }}</strong></button>
            </form>
        </div>
    </div>
@endsection
