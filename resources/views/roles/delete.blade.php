{{-- !-- Delete Warning Modal -->  --}}
<form action="{{ route('detruire_role', $role->id) }}" method="post">
    
        @csrf
        @method('DELETE')
        <h5 class="text-center">Etes-vous sûr que vous voulez supprimer {{ $role->name }} ?</h5>
    <div class="float-right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
    </div>
</form>