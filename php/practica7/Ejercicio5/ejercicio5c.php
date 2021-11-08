<?php
session_start();
$usuario=$_SESSION['usuario'];
$contra=$_SESSION['contra'];
?>

<html>
    <body>
        <?php echo 'Usuario: '.$usuario;
        echo '<br>';
        echo 'Contraseña: '.$contra;
        session_destroy();
        ?>            
    </body>
</html> 