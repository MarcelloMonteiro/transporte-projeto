@extends('layouts.app')

@section('titulo')
    Editar Tipo de Veículo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tipos-veiculos.index') }}">Tipos de Veículos</a></li>
    <li class="breadcrumb-item active">Editar Tipo de Veículo</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Editar Tipo de Veículo</h5><span>Faça a edição do tipo</span>
        </div>
        <div class="card-body">
            <form action="{{ route('tipos-veiculos.update', $tipo->uuid) }}" method="post">
                @csrf
                @method('PUT')
                @include('admin.paginas.tipos-veiculos._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
