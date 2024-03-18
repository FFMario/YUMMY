<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Yummy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            height: 20vh;
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        section {
            background: url('imagen1.png') center/cover no-repeat;
            height: 60vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .motivational-text {
            font-size: 18px;
            margin-top: 20px;
        }

        footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            background-color: #FFFFFF;
            color: black;
        }

        .footer-logo {
            width: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <img src="logo.jpg" alt="Yummy Logo" class="navbar-logo">
    </nav>

    <!-- Section -->
    <section>
        <h1>Yummy</h1>
        <p style="font-size: 40px;">DE LA COCINA A TU BUTACA</p>
        <p style="font-size: 20px;">"La comunidad Yummy te espera, Únete"</p>
        <div class="d-flex">
            <button class="btn btn-primary me-2" style="background-color: #FE7021; border-color: #FE7021;" onclick="window.location.href='inicioRegis'">Iniciar Sesión</button>
            <button class="btn btn-success" style="background-color: transparent; border-color: white; color: white;" onclick="window.location.href='inicioRegis'">Regístrate</button>
        </div>
        <div class="motivational-text">
            
            <p>ya eres parte <a href="inicioRegisV">da click aquí</a>!</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <img src="logo.jpg" alt="Footer Logo" class="footer-logo">
        <button class="btn btn-light" type="button" onclick="window.location.href='www.facebook.com'">
            <img src="face.png" alt="Lupa" style="width: 40px; height: 40px;">
        </button>
        <p style="margin-right: 40px;">YUMMY.SA.CV</p>
    </footer>

    <!-- Scripts de Bootstrap (jQuery y Popper.js son necesarios) -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>

</html>
