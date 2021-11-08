<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Listados completo con PAGINACIÓN </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("conexion.inc");
    $Cant_por_Pag = 2;
    $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
    if (!$pagina) {
        $inicio = 0;
        $pagina=1;
    } else {
        $inicio = ($pagina - 1) * $Cant_por_Pag;
    }// total de páginas
    $vSql = "SELECT * FROM ciudades";
    $vResultado = mysqli_query($link, $vSql);
    $total_registros=mysqli_num_rows($vResultado);
    $total_paginas = ceil($total_registros/ $Cant_por_Pag);
    echo "Numero de registros encontrados: " . $total_registros . "<br>";
    echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
    echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
    $vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
    $vResultado = mysqli_query($link, $vSql);
    $total_registros=mysqli_num_rows($vResultado);
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <td><b>Ciudad</b></td>
                <td><b>País</b></td>
                <td><b>Habitantes</b></td>
                <td><b>Superficie</b></td>
                <td><b>Metro</b></td>
            </tr>
        </thead>
        <?php
        while ($fila = mysqli_fetch_array($vResultado)){
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
    <?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
echo $pagina . " ";
else
//si la página no es la actual, coloco el enlace para ir a esa página
echo "<a href='listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><a href="menu.html">Volver al menu del ABM</a></p>
</body>

</html>