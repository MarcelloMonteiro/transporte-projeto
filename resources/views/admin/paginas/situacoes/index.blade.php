@extends('layouts.app')

@section('titulo')
    Situações
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Situações</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Situações</h5><span>Faça o gerenciamento das situações</span>
        </div>
        <div class="card-body">
            <p><a href="{{ route('situacoes.create') }}" class="btn btn-success-gradien">Cadastrar Situação</a></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Situação</th>
                    <th>Tipo</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($situacoes as $situacao)
                    <tr>
                        <td>{{ $situacao->situacao }}</td>
                        <td>{{ $situacao->tipo->tipo }}</td>
                        <td>
                            <a href="{{ route('situacoes.edit', $situacao->uuid) }}" class="btn btn-info"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ route('situacoes.show', $situacao->uuid) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Nenhuma situação cadastrada</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
