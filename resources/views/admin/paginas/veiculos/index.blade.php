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
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>Foto</th>
                    <th>Veículo</th>
                    <th>Odômetro</th>
                    <th>Viagens</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($veiculos as $veiculo)
                    <tr>
                        <td>
                            @if(isset($veiculo->foto))
                                <img src="{{ asset('storage/' . $veiculo->foto) }}" alt="{{ $veiculo->modelo->modelo }}" width="100px">
                            @endif
                        </td>
                        <td>
                            {{ $veiculo->modelo->montadora->montadora }} - {{ $veiculo->modelo->modelo }}<br>
                            {{ $veiculo->ano_modelo }} - {{ $veiculo->cor->cor }} - {{ $veiculo->combustivel->combustivel }}<br>
                            <strong>{{ $veiculo->placa }}</strong>
                        </td>
                        <td>{{ number_format($veiculo->odometro, 0, ',', '.') }}km</td>
                        <td></td>
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
