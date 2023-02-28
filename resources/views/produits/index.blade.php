@extends('layouts.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listes des Produits</h3>
            <div class="lead">
                <a class="btn btn-danger text-light btn-sm float-right" data-toggle="modal" data-target="#modaldefault"
                    id="buttondefault" data-attr="{{ route('page_creation_produit') }}"><i class="fas fa-plus"></i>&nbsp;
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
                        <th>Code à barre</th>
                        <th>Nom du produit</th>
                        <th>QR code</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($produits as $key => $produit)
                        <tr>
                            <td>{{ $i++ }}</td>
                            @foreach ($codebarres as $code)
                                @if ($code->id == $produit->codebarre_id)
                                    <td>
                                        <img src="{{ url('imagecodebarre/' . $code->imagecodebarre) }}"
                                                style="height: 100px; width: 150px;">

                                        @php
                                            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                                            $nom = $produit->nom ." ".$produit->id;
                                        @endphp

                                        <!--  $generator->getBarcode($nom, $generator::TYPE_CODE_128) !!} -->


                                    </td>
                                @endif
                            @endforeach
                            <td>{{ $produit->nom }}</td>
                            @foreach ($qrcodes as $code)
                                @if ($code->id == $produit->qrcode_id)
                                    <td>
                                        <img src="{{ url('imageqrcode/' . $code->imageqrcode) }}"
                                            style="height: 100px; width: 100px;"> 
                                           <!--  QrCode::size(150)->generate($nom); !!} -->


                                    </td>
                                @endif
                            @endforeach
                            <td class="float-right">

                                <a class="btn btn-warning btn-sm p-1" data-toggle="modal" data-target="#modaldefault"
                                    id="buttondefault" data-attr="{{ route('affichage_produit', $produit->id) }}"><i
                                        class="fas fa-eye"></i></a>


                                <a class="btn btn-primary btn-sm p-1" data-toggle="modal" data-target="#modaldefault"
                                    id="buttondefault" data-attr="{{ route('page_modification_produit', $produit->id) }}"><i
                                        class="fas fa-edit"></i></a>

                                <a class="btn btn-danger btn-sm p-1" data-toggle="modal" id="smallButton"
                                    data-target="#modalsm" data-attr="{{ route('produits.effacer', $produit->id) }}"> <i
                                        class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Code à barre</th>
                        <th>Nom du produit</th>
                        <th>QR code</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
