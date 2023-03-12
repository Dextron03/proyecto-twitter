
<?php

include 'conexion.php';

if(isset($_POST['submit'])){
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password' ")or die("query failed");

  if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_assoc($query);
    setcookie('id', $row['id'], time() + 60*60*24, '/');
    header("location:home.php"); 
    }else{
        $message[] = 'email o password incorrecta';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>login</title>
</head>
<body>

    <?php
    if(isset($message)){
        foreach($message as $message){
            echo "
            <div class='message'>
                <span>".$message."</span>
                <i class='fas fa-times' onclick='this.parentElement.remove()'></i>
            </div>
            <br/>
            ";
        }
    }
    ?>

    <section class="form-contenedor">
        <form action="" method="POST">
        <center><ion-icon name="logo-twitter"></ion-icon></center>
            <h3>LOGUEATE AHORA</h3>
            <input type="email" name="email" required maxlength="50" placeholder="ingresa tu email" class="box">

            <input type="password" name="password" required maxlength="50" placeholder="ingresa tu contraseña" class="box">

            <input type="submit" value="Enter" name="submit" class="btn">

            <p>¿Aun no tienes cuenta?<a href="registro.php">¡Registrate ahora!</a></p>

        </form>
    </section>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

