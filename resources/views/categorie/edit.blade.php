<form method="POST" action="{{ route('modifier_categorie', $categorie->id) }}">
    @method('patch')
    @csrf
    <h4 class="modal-title center mb-2">Modifier Catégorie</h4>

    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input value="{{ $categorie->nom }}" type="text" class="form-control" name="nom" placeholder="Nom" required>

        @if ($errors->has('nom'))
            <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
        @endif
    </div>

    <div class="float-right">

        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
    </div>
</form>
