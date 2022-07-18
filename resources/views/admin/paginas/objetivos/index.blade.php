@extends('layouts.app')

@section('titulo')
    Veículos
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Veículos</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Veículos</h5><span>Faça o gerenciamento dos veículos</span>
        </div>
        <div class="card-body">
            <p><a href="{{ route('veiculos.create') }}" class="btn btn-success-gradien">Cadastrar Veículo</a></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Veículo</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->modelo->modelo }}</td>
                        <td>
                            <a href="{{ route('veiculos.edit', $veiculo->uuid) }}" class="btn btn-info"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ route('veiculos.show', $veiculo->uuid) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Nenhuma veículo cadastrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
