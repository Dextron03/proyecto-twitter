<?php

include 'conexion.php';
setcookie("id", "", time() - 1, "/");

header("location:login.php");

?>