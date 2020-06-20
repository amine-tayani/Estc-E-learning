<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-learning Plateforme | Connexion</title>

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>
    <section>
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx"><img src="{{ asset('img/boooo.jpg') }}"></div>
                <div class="formBx">
                    <form method="POST" action="{{ route('login') }}">
                        <h2>Se connecter au Compte</h2>
                        @csrf
                        <input id="username" type="text" name="username" value="{{ old('username') }}" required
                            autocomplete="username" autofocus placeholder="Username">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            placeholder="Mot de Passe">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror




                        <input type="submit" value="Connexion">
                        <p class="signup">Vous n'avez pas un compte | <a href="/register"> Inscrire</a></p>

                    </form>
                </div>

            </div>
        </div>
    </section>
</body>

</html>