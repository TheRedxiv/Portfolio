<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
    $direc =  "fotos";
    $dir = opendir($direc);
    define("tamanioMax",1048576);
    if (isset($_POST["enviar"])&& !empty($_FILES["imagen"]["name"])){
        echo "imagen envida";
        $nombre = $_FILES["imagen"]["name"];
        $tipo = $_FILES["imagen"]["type"];
        $temp = $_FILES["imagen"]["tmp_name"];
        $tamanio = $_FILES["imagen"]["size"];
        if($tamanio > tamanioMax){
            echo "<p style='color:red'>el tamanio maximo de la imagen es 1mb";
        }else{
            if(! preg_match("/^image\/./",$tipo)){
                echo "El archivo no es una imagen";
            }else{
                move_uploaded_file($temp, "$direc/$nombre");
                echo "file saved";
            }
            }
    }
    
    ?>
    <table border=1>
        <tr>
    <?php
    $direc =  "fotos";
    $dir = opendir($direc);
    //var_dump($dir);
    define("columnas",3);
    $cuantas = 0;
    $esImagen = "/.*\.(jpg|png|jpeg|gif)$/";
    while($archivo = readdir($dir)){
        if (preg_match($esImagen,$archivo)){
            if ($archivo!="." && $archivo!=".." ){
                echo "<td><img src='$direc/$archivo'width='300px' height='300px' /></td>";
                $cuantas++;
                if ($cuantas >= columnas ){
                    echo "</tr><tr>";
                    $cuantas = 0;
                }
            }
        }
    }

    ?>
        </tr>
    </table>

    <form action="#" method="POST" enctype="multipart/form-data">
        Subir imagen<input type="file" name="imagen" id="imagen">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>