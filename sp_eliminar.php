<?php

include 'conexion.php';
  $id = $_GET['id'];

  $sql = "DELETE FROM users  WHERE id LIKE $id ";
  $art = mysqli_query ($conn,$sql);

  if (!$art ) {
    echo 'No se a eliminado';
  }
  else
  {
    header("Location: crud.php");
  }
?>