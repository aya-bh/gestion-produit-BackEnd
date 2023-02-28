<div class="bg-light p-4 rounded">
    <h1>Rôle {{ ucfirst($role->name) }} </h1>
    <div class="lead">

    </div>

    <div class="container mt-4">

        <h3>Les permissions</h3>

        <table class="table table-striped">
            <thead>
                <th scope="col" width="20%">Nom</th>
                <th scope="col" width="1%">Protection</th>
            </thead>

            @foreach ($rolePermissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->guard_name }}</td>
                </tr>
            @endforeach
        </table>
    </div>

</div>
<div class="float-right">
    <a href="{{ route('page_modification_role', $role->id) }}" class="btn btn-danger">Modifier</a>
    <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
</div>
