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

<div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr class="table-dark">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo electronico</th>
            <th>Numero de ventas</th>
            <th>Ingresos</th>
            <th>Comisiones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $registro)
          <tr>
            <td>{{$registro->id}}</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
