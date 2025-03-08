<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
    <button type="submit">Registrarse</button>
</form>
