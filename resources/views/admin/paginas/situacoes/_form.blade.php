@include('admin.includes.alerts')
<div class="form-group">
    <label for="tipo_situacao_id">Tipo de situação</label>
    <select name="tipo_situacao_id" id="tipo_situacao_id" class="form-control" required>
        <option selected disabled>Selecione uma situação</option>
        @forelse($tipos as $tipo)
            <option value="{{ $tipo->id }}"@if(isset($situacao) && $situacao->tipo_situacao_id == $tipo->id) selected @endif>{{ $tipo->tipo }}</option>
        @empty
            <option selected disabled>Nenhuma situação cadastrada</option>
        @endforelse
    </select>
</div>
<div class="form-group">
    <label for="situacao">Situação</label>
    <input type="text" class="form-control" id="situacao" name="situacao" placeholder="Informe o situacao de situação" required value="{{ $situacao->situacao ?? old('situacao') }}" autofocus>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição" value="{{ $situacao->descricao ?? old('descricao') }}">
</div>
