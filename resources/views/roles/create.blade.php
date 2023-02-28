@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('enregistrement_role') }}">
    @csrf
    <h4 class="modal-title center mb-2">Ajouter Rôle</h4>

    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Nom" required>
    </div>

    <label for="permissions" class="form-label">Attribuer des autorisations</label>

    <table class="table table-striped">
        <thead>
            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
            <th scope="col" width="20%">Nom</th>
            <th scope="col" width="1%">Protection</th>
        </thead>

        @foreach ($permissions as $permission)
            <tr>
                <td>
                    <input type="checkbox" name="permission[{{ $permission->name }}]"
                        value="{{ $permission->name }}"
                        class="permission">
                </td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->guard_name }}</td>
            </tr>
        @endforeach
    </table>

    <div class="float-right">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
    </div>
</form>


@section('scripts')
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if ($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>
@endsection
