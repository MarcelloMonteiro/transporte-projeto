@include('admin.includes.alerts')
<div class="form-group">
    <label for="tipo">Tipo de situação</label>
    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Informe o tipo de situação" required value="{{ $tipo->tipo ?? old('tipo') }}" autofocus>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição" value="{{ $tipo->descricao ?? old('descricao') }}">
</div>
