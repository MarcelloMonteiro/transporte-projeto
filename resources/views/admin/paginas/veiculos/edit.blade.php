@extends('layouts.app')

@section('titulo')
    Editar Veículo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('veiculos.index') }}">Veículos</a></li>
    <li class="breadcrumb-item active">Editar Veículo</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Editar Veículo</h5><span>Faça a edição do veículos</span>
        </div>
        <div class="card-body">
            <form action="{{ route('veiculos.update', $veiculo->uuid) }}" method="post">
                @csrf
                @method('PUT')
                @include('admin.paginas.veiculos._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
