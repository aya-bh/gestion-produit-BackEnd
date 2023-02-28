<form method="POST" action="{{ route('modifier_permission', $permission->id) }}">
    @method('patch')
    @csrf
    <h4 class="modal-title center mb-2">Modifier Permission "{{ $permission->name }}"</h4>

    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input value="{{ $permission->name }}" type="text" class="form-control" name="name" placeholder="Nom"
            required>

        @if ($errors->has('name'))
            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div class="float-right">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button type="button" data-dismiss="modal" class="btn btn-default">Annuler</button>
    </div>
</form>
