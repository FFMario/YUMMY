<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styleV.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <div class="header-logo">
                    <a href="url_de_tu_pagina_principal">
                        <!-- Reemplaza "tu_logo.png" con el nombre de tu logo y su ubicación -->
                        <img src="logo.jpg" alt="Logo">
                    </a>
                </div>
                <h1>Crear cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                </div>
                <input type="text" placeholder="Ingresa tu correo.">
                <input type="email" placeholder="Ingresa tu contraseña.">
                <button>Registrate</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <div class="header-logo">
                    <a href="url_de_tu_pagina_principal">
                        <img src="logo.jpg" alt="Logo">
                    </a>
                </div>
                <h1>Iniciar Sesion</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                </div>
                <span>Correo Electronico:</span>
                <input type="email" placeholder="Ingresa tu correo">
                <span>Contraseña:</span>
                <input type="password" placeholder="Ingres tu contraseña">
                <button>Iniciar sesion</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido</h1>
                    <p>"Listo para llevar tu emprendimiento al siguiente nivel? Unete a Yummy"</p>
                    <button class="hidden" id="login">Iniciar Sesion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola!</h1>
                    <p>"Bienvenido de nuevo maestro de los sabores"</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>