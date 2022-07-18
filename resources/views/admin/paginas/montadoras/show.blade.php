@extends('layouts.app')

@section('titulo')
    Montadora: {{ $montadora->montadora }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('montadoras.index') }}">Montadoras</a></li>
    <li class="breadcrumb-item active">Montadora: {{ $montadora->montadora }}</li>
@endsection

@section('conteudo')

    <div class="card">
        <div class="card-header pb-0">
            <h5>Montadora: {{ $montadora->montadora }}</h5><span>Veja as informações da montadora: {{ $montadora->montadora }}</span>
        </div>
        <div class="card-body">
            @if($montadora->logo)
                <img src="{{ asset('storage/' . $montadora->logo) }}" alt="{{ $montadora->montadora }}" width="100px">
            @endif
            <p><strong>Montadora: </strong> {{ $montadora->montadora }}</p>
            <p><strong>Descrição:</strong> {{ $montadora->descricao ?? 'Não cadastrada' }}</p>

            <form action="{{ route('montadoras.destroy', $montadora->uuid) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir a montadora <strong>{{ $montadora->montadora }}</strong></button>
            </form>

            @if(count($montadora->modelos) > 0)
                    <br>
                <h3>Modelos</h3>
                <div class="row">
                    @foreach($montadora->modelos as $modelo)
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>{{ $modelo->modelo }}</strong></p>
                                    @if($modelo->descricao)
                                        {{ $modelo->descricao }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
