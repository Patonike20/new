<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Adopción de Mascotas</title>
    
</head>
<body>
<div class="encabezado">
    <a href="../index.php" class="btn-regresar">
        ← Regresar
    </a>
</div>
<div class="contenedor">

    <div class="banner">
        <div class="overlay">
            <h1>Encuentra a tu mejor amigo</h1>
            <p>Adopta perros y gatos que buscan un hogar lleno de amor.</p>
        </div>
    </div>

    <div class="login">
        <h2>Bienvenido</h2>
        <p>Inicia sesión en tu cuenta</p>

        <form>
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" placeholder="correo@ejemplo.com">

            <label for="password">Contraseña</label>
            <input type="password" id="password" placeholder="********">

            <div class="opciones">
                <label>
                    <input type="checkbox">
                    Recordarme
                </label>

                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit">Iniciar Sesión</button>

            <div class="linea">
                <span>o continúa con</span>
            </div>

            <div class="social">
                <button type="button">Google</button>
                <button type="button">Facebook</button>
            </div>

            <p class="registro">
                ¿No tienes cuenta? <a href="#">Regístrate</a>
            </p>
        </form>
    </div>

</div>

</body>
</html>