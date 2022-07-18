@extends('layouts.app')

@section('titulo')
    Categorias de Habilitação
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Categorias de Habilitação</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Categorias de Habilitação</h5><span>Faça o gerenciamento das categorias</span>
        </div>
        <div class="card-body">
            <p><a href="{{ route('categorias-habilitacao.create') }}" class="btn btn-success-gradien">Cadastrar Categoria</a></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Categoria</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->categoria }}</td>
                        <td>
                            <a href="{{ route('categorias-habilitacao.edit', $categoria->uuid) }}" class="btn btn-info"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ route('categorias-habilitacao.show', $categoria->uuid) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Nenhuma categoria cadastrada</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
