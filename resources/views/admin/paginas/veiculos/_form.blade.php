@include('admin.includes.alerts')

<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="situacao_id">Situação</label>
            <select name="situacao_id" id="situacao_id" required class="form-control @error('situacao_id') is-invalid @enderror">
                <option selected disabled>Selecione a situação do veículo</option>
                @forelse($situacoes as $situacao)
                    <option value="{{ $situacao->id }}"@if(isset($veiculo) && $veiculo->situacao_id == $situacao->id) selected @endif>{{ $situacao->situacao }}</option>
                @empty
                    <option selected disabled>Nenhuma situação cadastrada</option>
                @endforelse
            </select>
            @error('situacao_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" class="form-control text-uppercase @error('placa') is-invalid @enderror" id="placa" name="placa" placeholder="Informe a placa" value="{{ $veiculo->placa ?? old('placa') }}">
            @error('placa')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tipo_veiculo_id">Tipo</label>
            <select name="tipo_veiculo_id" id="tipo_veiculo_id" class="form-control @error('tipo_veiculo_id') is-invalid @enderror" required>
                <option selected disabled>Selecione o tipo de veículo</option>
                @forelse($tiposVeiculo as $tipo)
                    <option value="{{ $tipo->id }}"@if(isset($veiculo) && $veiculo->tipo_veiculo_id == $tipo->id) selected @endif>{{ $tipo->tipo }}</option>
                @empty
                    <option selected disabled>Nenhum tipo de veículo cadastrado</option>
                @endforelse
            </select>
            @error('tipo_veiculo_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="marca">Marca</label>
            <select name="marca" id="marca" class="form-control @error('marca') is-invalid @enderror" required>
                <option selected disabled>Selecione a marca</option>
                @forelse($montadoras as $montadora)
                    <option value="{{ $montadora->id }}"@if(isset($veiculo) && $veiculo->marca == $montadora->id) selected @endif>{{ $montadora->montadora }}</option>
                @empty
                    <option selected disabled>Nenhum tipo de veículo cadastrado</option>
                @endforelse
            </select>
            @error('marca')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="modelo_id">Modelo</label>
            <select name="modelo_id" id="modelo_id" class="form-control @error('modelo_id') is-invalid @enderror" required>
                <option selected disabled>Selecione a marca</option>
            </select>
            @error('modelo_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="cor_id">Cor</label>
            <select name="cor_id" id="cor_id" class="form-control @error('cor_id') is-invalid @enderror" required>
                <option selected disabled>Selecione a cor</option>
                @forelse($cores as $cor)
                    <option value="{{ $cor->id }}"@if(isset($veiculo) && $veiculo->cor_id == $cor->id) selected @endif>{{ $cor->cor }}</option>
                @empty
                    <option selected disabled>Nenhuma cor cadastrada</option>
                @endforelse
            </select>
            @error('cor_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="ano_fabricacao">Ano fabricação</label>
            <input type="text" class="form-control @error('ano_fabricacao') is-invalid @enderror" id="ano_fabricacao" name="ano_fabricacao" placeholder="Informe o ano de fabricação" value="{{ $veiculo->ano_fabricacao ?? old('ano_fabricacao') }}">
            @error('ano_fabricacao')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="ano_modelo">Ano Modelo</label>
            <input type="text" class="form-control @error('ano_modelo') is-invalid @enderror" id="ano_modelo" name="ano_modelo" placeholder="Informe o ano do modelo" value="{{ $veiculo->ano_modelo ?? old('ano_modelo') }}">
            @error('ano_modelo')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="combustivel_id">Combustível</label>
            <select name="combustivel_id" id="combustivel_id" class="form-control @error('combustivel_id') is-invalid @enderror" required>
                <option selected disabled>Selecione o combustível</option>
                @forelse($combustiveis as $combustivel)
                    <option value="{{ $combustivel->id }}"@if(isset($veiculo) && $veiculo->combustivel_id == $combustivel->id) selected @endif>{{ $combustivel->combustivel }}</option>
                @empty
                    <option selected disabled>Nenhum combustível cadastrado</option>
                @endforelse
            </select>
            @error('combustivel_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="motorizacao">Motorização</label>
            <input type="text" class="form-control @error('motorizacao') is-invalid @enderror" id="motorizacao" name="motorizacao" placeholder="Informe o ano do modelo" value="{{ $veiculo->motorizacao ?? old('motorizacao') }}">
            @error('motorizacao')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="renavam">RENAVAM</label>
            <input type="text" class="form-control @error('renavam') is-invalid @enderror" id="renavam" name="renavam" placeholder="Informe o ano do modelo" value="{{ $veiculo->renavam ?? old('renavam') }}">
            @error('renavam')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="chassi">Chassi</label>
            <input type="text" class="form-control @error('chassi') is-invalid @enderror" id="chassi" name="chassi" placeholder="Informe o ano do modelo" value="{{ $veiculo->chassi ?? old('chassi') }}">
            @error('chassi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="odometro">Odômetro</label>
            <input type="text" class="form-control @error('odometro') is-invalid @enderror" id="odometro" name="odometro" placeholder="Informe o ano do modelo" value="{{ $veiculo->odometro ?? old('odometro') }}">
            @error('odometro')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
            @error('foto')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

</div>

@section('scripts')
    <script>
        $('select[name=marca]').change(function () {
            var marca = $(this).val();
            console.log(marca);
            $('select[name=modelo_id]').empty();
            $('select[name=modelo_id]').append('<option>Carregando...</option>');

            var dados = {
                _token: '{{ csrf_token() }}',
                marca: marca
            };

            $.ajax({
                url: '{{ route('modelos.montadora') }}',
                type: 'POST',
                data: dados,
                dataType: 'json',
                success: function (modelos){
                    if(modelos){
                        console.log(modelos);
                        $('select[name=modelo_id]').empty();
                        $('select[name=modelo_id]').append('<option>Selecione o modelo</option>');

                        $.each(modelos, function (key, value){
                            $('select[name=modelo_id]').append('<option value="' + value.id + '">' + value.modelo + '</option>');
                        });
                    } else {

                    }
                }
            });
        });
    </script>
@endsection
