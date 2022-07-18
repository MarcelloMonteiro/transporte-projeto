@extends('layouts.app')

@section('titulo')
    Modelos
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Modelos</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Modelos</h5><span>Faça o gerenciamento das modelos</span>
        </div>
        <div class="card-body">

            <form action="{{ route('montadoras.busca') }}" class="form" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="busca" class="form-control" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </form>

            <p><a href="{{ route('modelos.create') }}" class="btn btn-success-gradien">Cadastrar Modelo</a></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Montadora</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($modelos as $modelo)
                    <tr>
                        <td>{{ $modelo->modelo }}</td>
                        <td>{{ $modelo->montadora->montadora }}</td>
                        <td>
                            <a href="{{ route('modelos.edit', $modelo->uuid) }}" class="btn btn-info"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ route('modelos.show', $modelo->uuid) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Nenhuma modelo cadastrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <br>
            @if(isset($filtros))
                {!! $modelos->appends($filtros)->links() !!}
            @else
                {!! $modelos->links() !!}
            @endif
        </div>
    </div>
@endsection
