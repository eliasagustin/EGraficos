<?php
if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie("estilo",$estilo, time()+3600*24*90);
}
else{
    if(isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
    }
}
?>

<html>
    <head>

    </head>
    <body>
        <form action="ejercicio1.php" method="post">
                Aqui puedes seleccionar el estilo (color de fondo) que deseas la pagina:
                <br>
                <br>
                <select name="estilo">
                    <option value="rojo">Rojo
                    <option value="violeta">Violeta
                    <option value="rosa">Rosa
                </select>  
                <input type="submit" value="Actualizar estilo">                
        </form>
        <?php
        if(isset($estilo)){
            echo '<link rel="STYLESHEET" type="text/css" href="'.$estilo.'.css">';
        }
        ?>
    </body>
</html> 