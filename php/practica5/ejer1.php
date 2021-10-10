<?php 
$destinatario = "eliasagustin@gmail.com ";
$asunto = "Prueba";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
<h1>Hola!</h1>
<p>
<b>Esto es una prueba</b>.
xxxxxxxxxxxxxxxxxxxxxxxxxxx
x
</p>
</body>
</html>
';
// Para enviar un correo HTML
//debe establecerse la cabecera Content-type 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859- 1\r\n";
//remitente
$headers .= "Reply-To: eliasagustin@gmail.com\r\n";
mail($destinatario,$asunto,$cuerpo,$headers)
?>