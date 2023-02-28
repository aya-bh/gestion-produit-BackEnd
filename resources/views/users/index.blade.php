@extends('layouts.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listes des Utilisateurs</h3>
            <div class="lead">
                <a class="btn btn-danger text-light btn-sm float-right" data-toggle="modal" data-target="#modaldefault"
                    id="buttondefault" data-attr="{{ route('utilisateur.creer') }}"><i class="fas fa-plus"></i>&nbsp;
                    Ajouter</a>
            </div>

            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Nom d'Utilisateur</th>
                        <th>Roles</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    <span class="badge bg-info">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td class="float-right">
                                <a class="btn btn-warning btn-sm p-1" data-toggle="modal" data-target="#modalsm"
                                id="smallButton" data-attr="{{ route('afficher_utilisateur', $user->id) }}"><i
                                        class="fas fa-eye"></i></a>

                                <a class="btn btn-primary btn-sm p-1" data-toggle="modal" data-target="#modaldefault"
                                    id="buttondefault" data-attr="{{ route('page_modification_utilisateur', $user->id) }}"><i
                                        class="fas fa-edit"></i></a>

                                <a class="btn btn-danger btn-sm p-1" data-toggle="modal" id="smallButton"
                                    data-target="#modalsm" data-attr="{{ route('users.effacer', $user->id) }}"> <i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Nom d'Utilisateur</th>
                        <th>Roles</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
