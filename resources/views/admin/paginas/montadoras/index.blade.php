@extends('layouts.app')

@section('titulo')
    Montadoras
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Montadoras</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Montadoras</h5><span>Faça o gerenciamento das montadoras</span>
        </div>

        <div class="card-body">

            <form action="{{ route('montadoras.busca') }}" class="form" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="busca" class="form-control" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </form>

            <p><a href="{{ route('montadoras.create') }}" class="btn btn-success-gradien">Cadastrar Montadora</a></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Montadora</th>
                    <th>Modelos</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($montadoras as $montadora)
                    <tr>
                        <td>{{ $montadora->montadora }}</td>
                        <td>{{ count($montadora->modelos) }}</td>
                        <td>
                            <a href="{{ route('montadoras.edit', $montadora->uuid) }}" class="btn btn-info"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ route('montadoras.show', $montadora->uuid) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Nenhuma montadora cadastrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <br>
            @if(isset($filtros))
                {!! $montadoras->appends($filtros)->links() !!}
            @else
                {!! $montadoras->links() !!}
            @endif
        </div>
    </div>
@endsection
