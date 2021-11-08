<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alta Usuario</title>
</head>

<body>
    <?php
        include("conexion.inc");
//Captura datos desde el Form anterior
        $vCiudad = $_POST['ciudad'];
        $vPais = $_POST['pais'];
        $vHabitantes = $_POST['habitantes'];
        $vSuperficie = $_POST['superficie'];
        $vMetro = $_POST['tieneMetro'];
//Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT Count(Id) as cantidad FROM ciudades WHERE ciudad='$vCiudad'";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
    $vCantCiudades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCiudades ['cantidad']!=0){
 echo ("La ciudad ya existe<br>");
 echo ("<A href='menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO ciudades(ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$vCiudad', '$vPais','$vHabitantes' ,'$vSuperficie' ,'$vMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("La ciudad fue Registrada exitosamente<br>");
 echo ("<A href='menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?>
</body>

</html>