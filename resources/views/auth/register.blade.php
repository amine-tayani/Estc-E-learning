{{-- @extends('layouts.app')

@section('content') --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-learning Plateforme | Inscription</title>

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>
    <section>
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx"><img src="{{ asset('img/booo.jpg') }}"></div>
                <div class="formBx">

                    <form method="POST" action="{{ route('register') }}">
                        <h2>Créer un compte</h2>
                        @csrf
                        <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom"
                            autofocus placeholder="Nom">
                        @error('nom')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror


                        <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required
                            autocomplete="prenom" autofocus placeholder="Prenom">

                        @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                        <input id="username" type="text" name="username" value="{{ old('username') }}" required
                            autocomplete="username" autofocus placeholder="Username">

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror

                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            placeholder="Mot de Passe">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                        <input id="password-confirm" type="password" name="password_confirmation" required
                            autocomplete="new-password" placeholder="Confirmer Mot de Passe">
                        <input id="filiere" type="text" name="filiere" required placeholder="Filiere">
                        @error('filiere')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror


                        <input type="submit" value="inscrire"></input>
                        <p class="signup">vous avez un compte ? | <a href="/login"> Se connecter</a></p>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>