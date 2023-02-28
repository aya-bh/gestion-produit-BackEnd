@extends('layouts.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listes des Catégories</h3>
            <div class="lead">
                <a class="btn btn-danger text-light btn-sm float-right" data-toggle="modal" data-target="#modaldefault"
                    id="buttondefault" data-attr="{{ route('page_creation_categorie') }}"><i class="fas fa-plus"></i>&nbsp;
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
                        <th>No</th>
                        <th>Nom</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($categories as $key => $categorie)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $categorie->nom }}</td>

                            <td class="float-right">
                                <a class="btn btn-primary btn-sm p-1" data-toggle="modal" data-target="#modaldefault"
                                    id="buttondefault" data-attr="{{ route('page_modification_categorie', $categorie->id) }}"><i
                                        class="fas fa-edit"></i></a>


                                <a class="btn btn-danger btn-sm p-1" data-toggle="modal" id="smallButton"
                                    data-target="#modalsm" data-attr="{{ route('categorie.effacer', $categorie->id) }}"> <i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
