<!DOCTYPE html PUBLIC "‐//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
<title>Resultados</title>
</head>
<body>
<?php
include("conexion.inc");
$pal=$_POST['Palabra'];
if($pal){
    $resp = mysqli_query($link, "select * from buscador where canciones LIKE '%".$pal."%'") or die
(mysqli_error($link));
    if(mysqli_num_rows($resp) == "0") {
     echo "No hay resultados respecto a la cancion que busca.";
     echo "<br>";
     echo "<a href='ejercicio8.html'>Volver al Buscador</a>";
    } else {
            echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><br>";
            echo "<table border=1>";
            echo "<tr><td>Nombre</td><td>Autor</td><td>Duracion</td></tr>";
                   while($cat = mysqli_fetch_array($resp)) {?>
                   
                   <tr>
                   <td><?php echo ($cat['canciones']); ?></td>
                   <td><?php echo ($cat['autor']); ?></td>
                   <td><?php echo ($cat['duracion']); ?></td>
             
</tr> 
                      
  <?php                 }            }
}else{
echo "<form name='FormBuscador' method='post' action=''><input name='Palabra' type='text'
id='Palabra'><input type='submit' name='Submit' value='Buscar'></form>";
}?></table></body></html> 