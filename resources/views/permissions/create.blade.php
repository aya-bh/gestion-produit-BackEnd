<form method="POST" action="{{ route('enregistrement_permission') }}">
    @csrf
    <h4 class="modal-title center mb-2">Ajouter Permission</h4>
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Nom" required>

        @if ($errors->has('name'))
            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
    </div>


    <div class="float-right">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
    </div>


</form>
