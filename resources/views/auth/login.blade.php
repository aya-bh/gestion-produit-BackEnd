@extends('layouts.auth-master')

@section('content')
    <form action="{{ route('connection') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        @include('layouts.partials.messages')
       
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="username"
                value="{{ old('username') }}" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                placeholder="Mot de passe" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <button type="submit" class="btn btn-danger btn-block">Se connecter</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <p class="m-1">
        Si vous n'avez pas du compte!  <a href="{{ route('affichage_inscription') }}" class="text-center">S'inscrire</a>
      </p>
@endsection
