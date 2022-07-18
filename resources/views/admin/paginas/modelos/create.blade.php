@extends('layouts.app')

@section('titulo')
    Cadastrar Modelo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('modelos.index') }}">Modelos</a></li>
    <li class="breadcrumb-item active">Cadastrar Modelo</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Cadastrar Modelo</h5><span>Faça o cadastro de novos modelos</span>
        </div>
        <div class="card-body">
            <form action="{{ route('modelos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.paginas.modelos._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
