@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('inscription') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        @include('layouts.partials.messages')

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nom et Prénom"
                required="required" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="nom@example.com" required="required">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>

            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>


        <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                placeholder="Nom d'utilisateur" required="required">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>

            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>




        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                placeholder="Mot de passe" required="required">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control"name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="Confirmer Mot de passe" required="required">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <div class="row">

            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-danger btn-block">S'inscrire</button>
            </div>
            <!-- /.col -->
        </div>

    </form>
    <p class="m-1">
        <a href="{{ route('affichage_connection') }}" class="text-center">J'ai déjà un compte</a>
    </p>
@endsection
