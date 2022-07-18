@include('admin.includes.alerts')
<div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Informe a categoria" required value="{{ $categoria->categoria ?? old('categoria') }}" autofocus>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição" value="{{ $categoria->descricao ?? old('descricao') }}">
</div>
