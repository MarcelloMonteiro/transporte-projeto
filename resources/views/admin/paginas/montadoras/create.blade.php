@extends('layouts.app')

@section('titulo')
    Cadastrar Montadora
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('montadoras.index') }}">Montadoras</a></li>
    <li class="breadcrumb-item active">Cadastrar Montadora</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Cadastrar Montadora</h5><span>Faça o cadastro de novos montadoras da empresa</span>
        </div>
        <div class="card-body">
            <form action="{{ route('montadoras.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.paginas.montadoras._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
