<?php

include 'conexion.php';

if(isset($_COOKIE['id'])){
  $user_id = $_COOKIE['id'];
}else{
  $user_id = '';
  header('location:login.php');
}
$select = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
$fetch = mysqli_fetch_assoc($select);

?>