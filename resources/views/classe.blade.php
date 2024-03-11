@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form action="{{ route('createClasse') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="libelle">Libellé de la classe :</label>
        <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrez le libellé de la classe" required>
        @error('libelle')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Ajouter Classe</button>
</form>
