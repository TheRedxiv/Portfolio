<!--Fernandez Cuesta, Jose Manuel-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernandez Cuesta, Jose Manuel Ejercicio2</title>
    <!--Script. Mostrar el contenido de las líneas pares de un archivo de texto cuyo nombre se recibe por el método
    GET en la variable archivo. Si la variable no existe o el archivo indicado en la misma no existe en el mismo
    directorio, el recurso devolverá un mensaje de error lo más descriptivo posible. Se entrega el archivo texto.txt
    para que sirva como ejemplo.
    -->
</head>
<body>
    <?php
    error_reporting(0);
    if (isset($_GET["archivo"])&& $_GET["archivo"]!=""){
                if ($archivo=fopen($_GET["archivo"],"r")){
                    $nlinea = 1;
                    while(!feof($archivo)){
                        $linea = fgets($archivo);
                        if ($nlinea % 2 == 0){
                            echo $linea;
                        //echo "<br>";
                        }
                    $nlinea ++;
                    }       
                fclose($archivo);
            }else{
                echo "No se ha encontrado el archivo especificado";
            }
    }else{
        echo "No se ha pasado ningun archivo a analizar";
    }
    
    ?>
</body>
</html>