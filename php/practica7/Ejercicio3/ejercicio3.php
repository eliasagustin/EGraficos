<?php
if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    setcookie("usuario",$usuario, time()+3600*24*90);
}
else{
    if(isset($_COOKIE["usuario"])){
        $usuario = $_COOKIE["usuario"];
    }
}
?>

<html>
    <head>

    </head>
    <body>
    <?php
        if(isset($usuario)){
            echo 'Usuario: '.$usuario.'';
        }
        else{
            echo 'Sin nombre de usuario';
        }
        ?>
        <br>
        <br>
        <form action="ejercicio3.php" method="post">
                Ingresar nuevo usuario: <input type="text" name="usuario">
                <input type="submit" value="Guardar usuario"> 
                               
        </form>

    </body>
</html> 