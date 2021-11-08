<?php
if(isset($_POST["eleccion"])){
    $eleccion = $_POST["eleccion"];
    setcookie("eleccion",$eleccion, time()+3600*24*90);
}
else{
    if(isset($_COOKIE["eleccion"])){
        $eleccion = $_COOKIE["eleccion"];
    }
}
?>

<html>
    <head>

    </head>
    <body>
    <?php
        if(isset($eleccion)){
            switch ($eleccion) {
                case "deportes":
                    echo "<h1>Noticias Deportivas</h1>";
                    break;
                case "politicas":
                    echo "<h1>Noticias Politicas</h1>";
                    break;
                case "economicas":
                    echo "<h1>Noticias Economicas</h1>";
                    break;
                default: echo "<h1>Vacio</h1>";
                    break;
            }
        }
        else{
            echo "<h1>Noticias Deportivas</h1>
                    <h1>Noticias Politicas</h1>
                    <h1>Noticias Economicas</h1>";
        }
        ?>
        <br>
        <br>
        <form action="ejercicio4.php" method="post">
                <input type="radio" value="deportes" name="eleccion">
                <label >Noticias Deportivas</label><br>
                <input type="radio" value="politicas" name="eleccion">
                <label >Noticias Politicas</label><br>
                <input type="radio" value="economicas" name="eleccion">
                <label >Noticias Economicas</label><br><br>
                <input type="submit" value="Eligir titulo">
                               
        </form>

        <a href="borrarCookie.php">Eliminar eleccion</a>

    </body>
</html> 