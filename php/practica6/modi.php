<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modificacion</title>
</head>

<body>
    <?php
	include ("conexion.inc");
//Captura datos desde el Form anterior
	$vId = $_POST['id'];
	$vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHabitantes = $_POST['habitantes'];
    $vSuperficie = $_POST['superficie'];
    $vMetro = $_POST['metro'];
//Arma la instrucción SQL y luego la ejecuta
	$vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', tieneMetro='$vMetro' where
	Id='$vId'";
	mysqli_query($link,$vSql) or die (mysqli_error($link));
	echo("La ciudad fue modificada!<br>");
	echo("<A href= 'menu.html'>Volver al Menu del ABM</A>");
	// Cerrar la conexion
	mysqli_close($link);
	?>
</body>

</html>