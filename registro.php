<?php

include 'conexion.php';

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST ['password']);
  $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);


  $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'")or die("query failed");

  if(mysqli_num_rows($query) > 0){
      $message[] = 'Este usurio ya existe';
  }else{
      if($cpass != $password){
          $message[] = 'Confirma tu contraseña';
      }else{
          $insert = mysqli_query($conn, "INSERT INTO users(name, email, password) VALUES('$name','$email','$cpass')");
          if($insert){
              $message[] = 'Su cuenta a sido creada!';
              $fetch_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND '$password' = '$cpass' ");
              $row_fetch = mysqli_fetch_assoc($fetch_users);
              if(mysqli_num_rows($fetch_users) > 0){
                  setcookie('id', $row_fetch['id'], time() + 60*60*24, '/');
                  header('location:login.php');
              }
          }
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/login_registro.css">
    <title>registro</title>
</head>
<body>

  <?php
  if(isset($message)){
      foreach($message as $message){
          echo "
          <div class='message'>
              <span>".$message."</span>
              <i class='fas fa-times' onclick='this.parentElement.remove()'></i>
          </div>";
      }
  }
  ?>

  <section class="form-contenedor">
    <form action="" method="POST">
        <center><ion-icon name="logo-twitter"></ion-icon></center>
      <h3>REGISTRATE AHORA</h3>
      <input type="text" name="name" maxlength="20" placeholder="ingresa tu nombre de usuario" class="box">

      <input type="email" name="email"  maxlength="50" placeholder="ingresa tu email" class="box">

      <input type="password" name="password"  maxlength="50" placeholder="ingresa tu contraseña" class="box">

      <input type="password" name="cpass"  maxlength="50" placeholder="confirme la contraseña" class="box">

      <input type="submit" value="registrarse" name="submit" class="btn">

      <p>¿Ya tienes una cuenta?<a href="login.php">¡logueate ahora!</a></p>

    </form>
  </section>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>