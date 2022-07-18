@extends('layouts.app')

@section('titulo')
    Cadastrar Veículo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('veiculos.index') }}">Veículos</a></li>
    <li class="breadcrumb-item active">Cadastrar Veículo</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Cadastrar Veículo</h5><span>Faça o cadastro de novos veículos</span>
        </div>
        <div class="card-body">
            <form action="{{ route('veiculos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.paginas.veiculos._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
