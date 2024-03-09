<!DOCTYPE html>
<html lang="en">

<head>
    <title>vendedores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleVendedor.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="height:1500px">

    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mynavbar">
                <p style="margin-left: 40px;" >YUMMY</p>
                <form class="d-flex mx-auto">
                    <button class="btn btn-light" type="button">
                        <img src="busque.jpg" alt="Lupa" style="width: 40px; height: 40px;">
                    </button>
                    <input class="form-control me-2" type="text" placeholder="¿Qué se te antoja?">
                </form>
            </div>
        </div>
    </nav>
    @yield('navbar')
</body>

</html>