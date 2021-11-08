<?php
session_start();
$_SESSION['usuario']=$_POST['usuario'];
$_SESSION['contra']=$_POST['contra'];
?>


<html>
    <body>
        <a href="ejercicio5c.php">Recuperar valores almacenados</a>
    </body>
</html>
 