<!doctype html>
<html lang="en">

<head>
  <title>CRUD</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

  <section class="container bg-warning">
    <section class="row">
      <section class="col-md">
        <header class="py-3">
          <h3 class="text-center">MANTENIMIENTO</h3>
        </header>
      </section>
    </section>
  </section>


<section class="container mt-5">
  <section class="row justify-content-center">
    <section class="col-md-7">
      <section class="card">
        <section class="card-header">
          <h6>Lista de personas</h6>
        </section>
        <section class="p-4">
          <!-- tabla -->
          <table class="table align-middle">
            <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">nombre</th>
                  <th scope="col">email</th>
                  <th scope="col">contraseña</th>
                  <th scope="col">opciones</th>
                </tr>
            </thead>
            <tbody>
              <?php
                  include 'conexion.php';
                  $buscar = $_POST['name'];
                  $sql = "SELECT id, name, email,password FROM users WHERE name LIKE '$buscar' '%' or id LIKE '$buscar' '%' ORDER BY id DESC ";
                  $art = mysqli_query ($conn,$sql);
                  while($mostrar = mysqli_fetch_row($art)){
                    ?>
                    <tr>
                      <td><?php echo $mostrar['0'] ?></td>
                      <td><?php echo $mostrar['1'] ?></td>
                      <td><?php echo $mostrar['2'] ?></td>
                      <td><?php echo $mostrar['3'] ?></td>
                      <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?> &
                        name=<?php echo $mostrar['1'] ?>&
                        email=<?php echo $mostrar['2'] ?>&
                        password=<?php echo $mostrar['3'] ?>
                        ">Editar</a>
                        <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Elimiar</a>
                      </td>
                    </tr>
                  <?php

                  }
                  ?>
            </tbody>
          </table>
          <!-- tabla -->
        </section>
      </section>
    </section>
    <!-- Formulario -->
    <section class="col-md-4">
      <section class="card">
        <section class="card-header">
          <h6>DATOS:</h6>
        </section>
        <form action="buscar.php" method="POST" class="p-4">
          <!-- id -->
          <section class="mb-3">
            <label class="form-label">id:</label>
            <input type="text" name="id" class="form-control" autofocus>
          </section>
          <!-- id -->
          <!-- nombre -->
          <section class="mb-3">
            <label class="form-label">nombre:</label>
            <input type="text" name="name" class="form-control" autofocus>
          </section>
          <!-- nombre -->
          <!-- email -->
          <section class="mb-3">
            <label class="form-label">email:</label>
            <input type="text" name="email" class="form-control" autofocus>
          </section>
          <!-- email -->
          <!-- contraseña -->
          <section class="mb-3">
            <label class="form-label">contraseña:</label>
            <input type="text" name="password" class="form-control" autofocus>
          </section>
          <!-- email -->
          
          <section class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" value="Buscar" class="btn btn-primary">
            <a href="nuevo.php" class="btn btn-primary m-3">Nuevo</a>
          </section>
        </form>
      </section>
    </section>
  </section>
</section>



<!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>