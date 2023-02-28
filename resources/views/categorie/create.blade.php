<form method="POST" action="{{ route('creation_categorie') }}">
    @csrf
    <h4 class="modal-title center mb-2">Ajouter Catégorie</h4>
    <div class="mb-3">
        <input value="{{ old('nom') }}" type="text" class="form-control" name="nom" placeholder="Nom" required>

        @if ($errors->has('nom'))
            <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
        @endif
    </div>


    <div class="float-right">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
    </div>
</form>
