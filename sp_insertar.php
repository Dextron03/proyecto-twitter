<?php

include 'conexion.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (name, email,password) VALUES ('$name','$email','$password') ";
  $art = mysqli_query ($conn,$sql);

  if (!$art ) {
    echo 'No se a podido insertar';
  }
  else
  {
    header("Location: crud.php");
  }
?>