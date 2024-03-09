<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styleAdminV.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Coiny&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #FFF6ED;">

<div class="container mt-3">
  <div class="row">
    <div class="col-md-12 text-center">
      <img src="logo.jpg" alt="Logo" class="img-fluid float-start me-3">
      <h1 class="mt-2">Administrar</h1>
      <h1 class="mt-2">Vendedores</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr class="table-dark">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo electrónico</th>
            <th>Número de ventas</th>
            <th>Ingresos</th>
            <th>Comisiones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($vendedores as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nombreV }}</td>
              <td>{{ $registro->apellido }}</td>
              <td>{{ $registro->correo_electronico }}</td>
              <td>{{ $registro->nVentas }}</td>
              <td>{{ $registro->ingresos }}</td>
              <td>{{ $registro->comisiones }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
