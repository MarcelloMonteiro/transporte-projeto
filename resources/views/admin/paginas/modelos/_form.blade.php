@include('admin.includes.alerts')
<div class="form-group">
    <label for="montadora_id">Montadora</label>
    <select name="montadora_id" id="montadora_id" class="form-control" required>
        <option selected disabled>Seleciona a montadora</option>
        @forelse($montadoras as $montadora)
            <option value="{{ $montadora->id }}">{{ $montadora->montadora }}</option>
        @empty
            <option selected disabled>Nenhuma montadora cadastrada</option>
        @endforelse
    </select>
</div>
<div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Informe a modelo" required value="{{ $modelo->modelo ?? old('modelo') }}" autofocus>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição" value="{{ $modelo->descricao ?? old('descricao') }}">
</div>
