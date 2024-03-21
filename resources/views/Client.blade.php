<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <form method="POST" action="{{ route('save') }}">
            @csrf

            <div>
                <label for="email">Email</label>
                <input id="email" type="text" name="name" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input id="password" type="text" name="address" required>
            </div>

            <div>
                <input type="text" name="phone" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Recordarme</label>
            </div>
            <input type="text" name="id_country" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <div>
                <button type="submit">Iniciar sesión</button>
            </div>
        </form>
       @foreach ($clients as $key )
        {{$key["name"]}}
        {{$key["address"]}}
       @endforeach
    </body>
</html>

