@include('admin.includes.alerts')
<div class="form-group">
    <label for="montadora">Montadora</label>
    <input type="text" class="form-control" id="montadora" name="montadora" placeholder="Informe a montadora" required value="{{ $montadora->montadora ?? old('montadora') }}" autofocus>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição" value="{{ $montadora->descricao ?? old('descricao') }}">
</div>
<div class="form-group">
    <label for="logo">Logo</label>
    <input type="file" accept="image/*" name="logo" id="logo" class="form-control">
    @if(isset($montadora) && $montadora->logo)
        <img src="{{ asset('storage/' . $montadora->logo ) }}" alt="{{ $montadora->montadora }}" width="100px">
    @endif
</div>
