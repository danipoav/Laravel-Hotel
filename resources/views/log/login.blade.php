@extends('layouts.log')

@section('content')
    <div class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesión</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-700">Recordarme</label>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                Iniciar Sesión
            </button>
        </form>

        <p class="mt-4 text-center">
            ¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-blue-500">Regístrate aquí</a>
        </p>
    </div>
@endsection
