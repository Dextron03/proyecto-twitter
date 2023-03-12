<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

  <section>
    <form action="sp_insertar.php" method="post">
        <table class="table align-middle">
          <tbody>
            <tr class="">
              <td scope="row">Ingresar Datos</td>
            </tr>
            <tr>
              <td>NOMBRE</td>
              <td><input type="text" name="name" class="form-control"></td>
            </tr>
            <tr>
              <td>EMAIL</td>
              <td><input type="text" name="email" class="form-control"></td>
            </tr>
            <tr>
              <td>PASSWORD</td>
              <td><input type="text" name="password" class="form-control"></td>
            </tr>
            <tr>
              <td><input type="submit" value="Guardar" class="btn btn-primary"></td>
            </tr>
          </tbody>
        </table>
    </form>
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