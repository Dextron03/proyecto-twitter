<?php

    include 'conexion.php';
    include 'user_sesion.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hom.css">
    <title>Twitter</title>
</head>
<body>

<header>
<!------------------------------------------------------------------------------------------------>
<!--=========================================MEMU VERTICAL======================================-->
<div class="menuVertical">
    <ul>
        <li>
            <a href="logout.php">
            <span class="icon"><ion-icon name="exit"></ion-icon></span>
            </a>
        </li>

        <li>
            <a href="#">
            <span class="icon"><ion-icon name="home-sharp"></ion-icon></span>
            <span class="title">Home</span> 
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="globe"></ion-icon></span>
                <span class="title">Explore</span> 
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="notifications-sharp"></ion-icon></span>
                <span class="title">Notifications</span> 
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <span class="title">Messanges</span> 
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="bookmarks"></ion-icon></ion-icon></span>
                <span class="title">Bookmarks</span> 
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="list-sharp"></ion-icon></span>
                <span class="title">List</span> 
                </a>
        </li>

            <li>
                <a href="#">
                   <span class="icon"><ion-icon name="person-sharp"></ion-icon></span>
                   <span class="title">Profile <?php ?></span> 
                </a>
            </li>

        <li>
            <a href="#">
               <span class="icon"><ion-icon name="ellipsis-horizontal-circle"></ion-icon></span>
               <span class="title">More</span> 
            </a>
        </li>

        <li>
            <a href="#">
               <span class="icon"><ion-icon name="search"></ion-icon></span>
                 <input  class="icon" type="text" name="" id="Buscador" placeholder="-Buscar-">
            </a>
        </li>
</ul>

<div class="toggle"></div>
</div>
</header>
<!--=========================================MEMU VERTICAL======================================-->
<!------------------------------------------------------------------------------------------------>

<!------------------------------------------------------------------------------------------------>
<!--================================HACER LA PARTE DE LAS PUBLICACIONES=========================-->
    
</div>


    <div class="contenedor">

        <!---===========================================================================================================-->
        <!--Cuadro de publicacion-->
            <div class="contenido-post">

                <div id="mensaje-public">
                    <input type="text" id="textoP" placeholder="Escribe tu mensaje">
                </div>        

            </div>
        <!--Cuadro de publicacion-->
        <!---===========================================================================================================-->

        <!---===========================================================================================================-->
        <!--Publicacion-->

            <div class="hijo1">
                <div class="publicacion">
                    
                </div>

                <div class="publicacion">

                </div>
            </div>
        <!--Publicacion-->
        <!---===========================================================================================================-->

        <!---===========================================================================================================-->
        <!--Sugerencia-->

            <div class="hijo2">
                <div class="sugerencia">

                </div>

                <div class="sugerencia">

                </div>
            </div>
        <!--Sugerencia-->
        <!---===========================================================================================================-->
    </div>


<!--================================HACER LA PARTE DE LAS PUBLICACIONES=========================-->
<!------------------------------------------------------------------------------------------------>


<!--===SCRIPTS==-->

<!--Este script lo saque de la pagina oficial de los iconos basicamente es como una libreria que nos
deja usar los iconos-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!--Este lo hice para que el boton de cerrar y abrir funcione -->
<script>
    let menuVertical = document.querySelector('.menuVertical');
    let toggle = document.querySelector ('.toggle');
    toggle.onclick = function(){
        menuVertical.classList.toggle('active')
    }
</script>
<!--===SCRIPTS==-->
</body>
</html>