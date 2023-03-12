<?php

include 'conexion.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "UPDATE users SET id='$id' , name='$name' , email='$email' , password='$password' WHERE id LIKE $id ";
  $art = mysqli_query ($conn,$sql);

  if (!$art ) {
    echo 'No se a podido actualizar';
  }
  else
  {
    header("Location: crud.php");
  }
?>