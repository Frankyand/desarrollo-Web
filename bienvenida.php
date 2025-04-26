<?php
    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['rol']))
    {
        echo "hola";
    }
    else
        echo"No estas autenticado";
?>