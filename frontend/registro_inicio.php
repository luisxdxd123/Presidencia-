<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../backend/styles_r.css">
    <link rel="stylesheet" href="../backend/styles.css">
    <title>LOGEATE!</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
        <form>
            <h1>Crea una cuenta</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>Usa un correo para el registro y llena los campos</span>

            <input type="text" placeholder="Nombre" required>
            <input type="text" placeholder="Apellido" required>
            <input type="date" placeholder="Fecha de Nacimiento" required>

            <select required>
                <option value="" disabled selected>Seleccione su género</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="personalizado">Personalizado</option>
            </select>

            <input type="tel" placeholder="Número de Teléfono">
            <input type="email" placeholder="Correo Electrónico" required>
            <input type="password" placeholder="Contraseña" required>

            <button>Registrarse</button>
        </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Inicia</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Usa tu correo y tu contraseña</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Olvidaste tu contraseña¿? Restablecela</a>
                <button>Inicia sesion</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido de vuelta</h1>
                    <p>Ingresa a tu cuenta</p>
                    <button class="hidden" id="login">Inicia  sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola ciudadano</h1>
                    <p>Registrate aqui si no tienes una cuenta</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>