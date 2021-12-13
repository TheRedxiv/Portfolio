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
    if (isset($_POST["añadir"])){
        if (in_array("",$_POST)){
            echo "<p style='color:red'> debes rellenar todos los campos";
        }else{
        $archivo=fopen("filewan.txt","a");
        fwrite($archivo, $_POST["Nombre"]."-".$_POST["apellido"]."-".$_POST["Nif"]."\r\n");
        fclose($archivo);
        }
    }
    if (isset($_POST["mostrar"])){
        echo "mostrando";
        echo "<table border=1>";
        if ($archivo=fopen("filewan.txt","r")){
            while(!feof($archivo)){
                $linea = fgets($archivo);
                $lineasep = explode("-",$linea);
                if (strpos($linea,"-")){
                    echo "<tr>";
                    for ($i=0; $i<count($lineasep);$i++){
                        echo "<td>".$lineasep[$i]."</td>";
                    }
                    echo "</tr>";
                }
             }
        }
        echo "</table>";
    }
    
    ?>

    <form action="#" method="POST">
        Nom<input type="text" name="Nombre" id="">
        Ape<input type="text" name="apellido">
        Nif<input type="text" name="Nif">
        <input type="submit" name="añadir" value="añadir">
        <input type="submit" name="mostrar" value="mostrarFile">
    </form>
</body>
</html>