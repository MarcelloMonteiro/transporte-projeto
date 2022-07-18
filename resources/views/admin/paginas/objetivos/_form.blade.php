@include('admin.includes.alerts')
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
<div class="form-group">
    <label for="placa">Placa</label>
    <input type="text" class="form-control text-uppercase" id="placa" name="placa" placeholder="Informe a placa" value="{{ $veiculo->placa ?? old('placa') }}">
</div>
