<form method="POST" action="{{ route('modifier_produit', $produit->id) }}"  enctype="multipart/form-data">
    @method('patch')
    @csrf
    <h4 class="modal-title center mb-2">Modifier Produit "{{ $produit->nom }}"</h4>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input value="{{ $produit->nom }}" type="text" class="form-control" name="nom" placeholder="Nom" required>

        @if ($errors->has('nom'))
            <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
        @endif
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input value="{{ $produit->description }}" type="text" class="form-control" name="description"
            placeholder="Description" required>

        @if ($errors->has('description'))
            <span class="text-danger text-left">{{ $errors->first('description') }}</span>
        @endif
    </div>

    <div class="mb-3">
        <label for="quantite" class="form-label">Quantité</label>
        <input value="{{ $produit->quantite }}" type="text" class="form-control" name="quantite"
            placeholder="Quantité" required>

        @if ($errors->has('quantite'))
            <span class="text-danger text-left">{{ $errors->first('quantite') }}</span>
        @endif
    </div>

    <div class="mb-3">
        <label for="categorie" class="form-label">Catégorie</label>
        <select class="form-control" name="categorie_id" required>
            <option value="">Selectionner catégorie</option>
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}"
                    {{ $categorie->id == $produit->categorie_id ? 'selected' : '' }}>
                    {{ $categorie->nom }}
                </option>
            @endforeach
        </select>
        @if ($errors->has('categorie_id'))
            <span class="text-danger text-left">{{ $errors->first('categorie_id') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="imagecodebarre" class="form-label">Code à barre</label>
        <div class="custom-file">
            @foreach ($codebarres as $code)
                @if ($code->id == $produit->codebarre_id)
                    <input type="file" class="custom-file-input" id="customFile"
                        name="imagecodebarre"value="{{ $code->imagecodebarre }}">
                        <img src="{{ url('imagecodebarre/' . $code->imagecodebarre) }}" width="100px">
                @endif
            @endforeach
            <input type="hidden" name="codebarre_id" value="{{ $produit->codebarre_id }}">
            <label class="custom-file-label" for="customFile">Sélectionner Image</label>
        </div>
        @if ($errors->has('imagecodebarre'))
            <span class="text-danger text-left">{{ $errors->first('imagecodebarre') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="imageqrcode" class="form-label">QR CODE</label>
        <div class="custom-file">
            @foreach ($qrcodes as $code)
                @if ($code->id == $produit->qrcode_id)
                    <input type="file" class="custom-file-input" id="customFile" name="imageqrcode"
                        value="{{ $code->imageqrcode }}">
                        <img src="{{ url('imageqrcode/' . $code->imageqrcode) }}" width="100px">

                @endif
            @endforeach

            <input type="hidden" name="qrcode_id" value="{{ $produit->qrcode_id }}">
            <label class="custom-file-label" for="customFile">Sélectionner Image</label>
        </div>
        @if ($errors->has('imageqrcode'))
            <span class="text-danger text-left">{{ $errors->first('imageqrcode') }}</span>
        @endif
    </div>



    <div class="float-right">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button type="button" data-dismiss="modal" class="btn btn-default">Annuler</button>
    </div>
</form>
