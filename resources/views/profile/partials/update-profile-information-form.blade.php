<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Perfil</title>
    <!-- Vinculación del CSS Personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h2>Información del Perfil</h2>
            <p>Actualiza la información de tu perfil y tu dirección de correo electrónico.</p>
        </header>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <!-- Campo Nombre -->
            <div>
                <label for="name">Nombre</label>
                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required>
                @if ($errors->has('name'))
                    <p class="error-message">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <!-- Campo Email -->
            <div>
                <label for="email">Correo Electrónico</label>
                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
                @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Botón Guardar -->
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>