@extends('layouts.app')

@section('titulo')
    Editar Montadora
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('montadoras.index') }}">Montadoras</a></li>
    <li class="breadcrumb-item active">Editar Montadora</li>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Editar Montadora</h5><span>Faça a edição das montadoras</span>
        </div>
        <div class="card-body">
            <form action="{{ route('montadoras.update', $montadora->uuid) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.paginas.montadoras._form')
                <button class="btn btn-success-gradien">Enviar</button>
            </form>
        </div>
    </div>
@endsection
