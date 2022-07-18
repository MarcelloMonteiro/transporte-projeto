@extends('layouts.app')

@section('titulo')
    Editar Modelo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('modelos.index') }}">Modelos</a></li>
    <li class="breadcrumb-item active">Editar Modelo</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Editar Modelo</h5><span>Faça a edição dos modelos</span>
        </div>
        <div class="card-body">
            <form action="{{ route('modelos.update', $modelo->uuid) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.paginas.modelos._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
