<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Iniciar Sesión</button>
</form>
