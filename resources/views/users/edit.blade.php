<form method="post" action="{{ route('modifier_utilisateur', $user->id) }}">
    @method('patch')
    @csrf
    <h4 class="modal-title center mb-2">Modifier Utilisateur {{ $user->name }}</h4>

    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input value="{{ $user->name }}" type="text" class="form-control" name="name" placeholder="Nom" required>

        @if ($errors->has('name'))
            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input value="{{ $user->email }}" type="email" class="form-control" name="email"
            placeholder="Email address" required>
        @if ($errors->has('email'))
            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Nom d'Utilisateur</label>
        <input value="{{ $user->username }}" type="text" class="form-control" name="username"
            placeholder="Nom utilisateur" required>
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input value="{{ Crypt::decryptString($user->password) }}" type="password" class="form-control" name="password"
            placeholder="Mot de passe" required>
        @if ($errors->has('password'))
            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Confirmer mot de passe</label>
        <input value="{{ Crypt::decryptString($user->password) }}" type="password" class="form-control"
            name="password_confirmation" placeholder="Confirmer Mot de passe" required>
        @if ($errors->has('password_confirmation'))
            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
        @endif

    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select class="form-control" name="role" required>
            <option value="">Selectionner role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ in_array($role->name, $userRole) ? 'selected' : '' }}>
                    {{ $role->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('role'))
            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
        @endif
    </div>

    <div class="float-right">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
    </div>
</form>
