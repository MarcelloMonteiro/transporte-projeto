@extends('layouts.app')

@section('titulo')
    Tipos de Veículo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Tipos de Veículo</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Tipos de Veículo</h5><span>Faça o gerenciamento dos tipos de veículos</span>
        </div>
        <div class="card-body">
            <p><a href="{{ route('tipos-veiculos.create') }}" class="btn btn-success-gradien">Cadastrar Tipo de Veículo</a></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->tipo }}</td>
                        <td>
                            <a href="{{ route('tipos-veiculos.edit', $tipo->uuid) }}" class="btn btn-info"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ route('tipos-veiculos.show', $tipo->uuid) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Nenhuma tipo cadastrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
