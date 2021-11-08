<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Listados completo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="bg-dark text-white">
    <?php
include("conexion.inc");
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
    <table class="table table-dark">
        
        <tr>
            <td><b>Ciudad</b></td>
            <td><b>País</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>Metro</b></td>
        </tr>

        <?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
        <tr>
            <td>
                <?php echo ($fila['ciudad']); ?>
            </td>
            <td>
                <?php echo ($fila['pais']); ?>
            </td>
            <td>
                <?php echo ($fila['habitantes']); ?>
            </td>
            <td>
                <?php echo ($fila['superficie']); ?>
            </td>
            <td>
                <?php echo ($fila['tieneMetro']); ?>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
    
    <p align="center"><a class = "text-light bg-dark" href="menu.html">Volver al menu del ABM</a></p>
    
</div>
</body>

</html>