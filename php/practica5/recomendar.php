<?php
// Completamos la variable $asunto con el título del mensaje
// y armamos el mensaje dentro de la variable $mensaje
$asunto = "Recomendación de un sitio web";
$mensaje = "Hola ".$namigo.", tu amigo ".$nombre." te recomienda ".$_SERVER['REQUEST_URI'].".
Gracias.";
mail($emaila, $asunto, $mensaje, "From: ".$email);
?>
<html> 
<head>
<title>Gracias por Recomendarnos</title>
</head> 
<body> 
<p><font face="Arial" size="2">Gracias por recomendar este sitio</font></p>
<p><input type="button" value="Cerrar " onclick="window.close();"></p>
</body>
</html>