<?php

  $conn = mysqli_connect('localhost','root','','login');

  if(!$conn){
    echo 'La conexion no sea establecido';
  }

?>