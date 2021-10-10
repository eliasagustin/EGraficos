<?php
session_start();
?>
<html>
<body>
<a href="cuenta.php"></a>
<?php
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br>
<br>
<a href="cant_visitas.php">Otra página</a>
</body>
</html>