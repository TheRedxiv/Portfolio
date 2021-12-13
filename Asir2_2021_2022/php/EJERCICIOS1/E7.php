<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Hacer un programa que muestre en una tabla de 4 columnas todas las imágenes del
    directorio "fotos". Para ello consulte el manual (en concreto la referencia de funciones
    de directorios). Suponga que en el directorio sólo existen fotos.--> 
</head>
<body>
    <h1>Imagenes</h1>
    <?php
    //script que recibe el file y lo sube a fotos
    if(isset($_POST["enviar"])){
        var_dump($_FILES);
        move_uploaded_file($_FILES["imagen"]["tmp_name"],'fotos/'.$_FILES['imagen']['name']);
    }
    ?>
    <table border=1>
    <?php
    //creo una variable $dir que devuelve los contenidos de fotos
    $dir = opendir("fotos");
    $columnas = 3;
    $cuantas = 0;
    while (false != ($archivo = readdir($dir))){
        if ($archivo != ".." && $archivo != "."){
            echo "<td><img src='fotos/$archivo'/ width='300px' height='300px'></td>";
            $cuantas++;
        }if ($cuantas%$columnas==0){
            echo "</tr><tr>";
        }
    }
    echo "</tr>";
    ?>
    </table>

    <form action="#" method="POST" enctype="multipart/form-data">
        imagen <input type="file" name="imagen">
        <input type="submit" name="enviar" value="enviar">
    </form>
    
</body>
</html>