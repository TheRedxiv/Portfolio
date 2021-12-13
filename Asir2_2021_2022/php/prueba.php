<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"Mi Titulo"?></title>
</head>
<body>
<?php
$numero = 2;
$palabras = "agua corazon de melon";
echo "$numero";


?>
<br>
<?php
echo "El numero es ". $numero;
echo "<br>";
echo "El numero vale $numero sin concatenar";
print("<br>");
print("Echo hahaha no vuelvo a print");
var_dump($numero);   //me devolverta int
//var_dump($palabras); //me devolvera Str
echo "<br>";
strlen($palabras); //devuelve la longitud de la cadena
?>
</body>
</html>