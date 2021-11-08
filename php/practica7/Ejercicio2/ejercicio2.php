<?php
if (!isset($_COOKIE['contador']))
{
$contador = 1;
setcookie("contador", $contador , time()+ 3600*24*365);
}
else
{
$contador = $_COOKIE['contador'] + 1;
setcookie("contador", $contador , time()+ 3600*24*365);
}
?>
<html>
<body>
<?php
if ($contador > 1)
{
echo "Esta es tu visita número " .$_COOKIE['contador'];
}
else
{
echo "Bienvenido, esta es la primera vez que visitás esta página";
}
?>
</body>
</html> 