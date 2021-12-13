<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Elaborar una página php que solicite una fecha y presente en una tabla todos los datos
    correspondientes a esa fecha que aparecen en el fichero datos_e11.txt. Cada línea del
    archivo tiene el siguiente formato: aaaa-mm-dd;hh:mm:ss;nombre_usuario.-->

    <!--Diseñar un script PHP que reciba los datos de un formulario mediante el método GET
    (nombre, apellidos, email, dni, telléfono y población) y los almacene en un fichero
    externo “datos_e12.txt”, añadiendo una nueva línea de la forma:
    Fecha;NombreCompleto;Email;NIF;Telefono;Población 
    La fecha será la del sistema y se grabará de la forma “aaaa/mm/dd hh:mm:ss”. El NIF
    estará compuesto por el número de DNI seguido de la letra que le corresponde. -->
</head>
<body>
    <table border="1">
    <?php
    if (isset($_POST["enviar"])){
        echo "Entre";
        if ($archiv = fopen("datos_e11.txt", "r")){
            while(!feof($archiv)){
                $line = fgets($archiv);
                $entrada = $_POST["fecha"];
                if (preg_match("/^$entrada/",$line)){
                    $linea = explode(";",$line);
                    echo "<tr>";
                    for ($i=0 ; $i < count($linea); $i++){
                        echo "<td>". $linea[$i]."</td>";
                    }
                    echo "</tr>";
                }
            }
        }
    }
    ?>
    </table>
    <h1>consultar <h1>
    <form action="#" method="post">
        <input type="date" name="fecha" id="fecha"><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <h1> introducir </h1>
    <form action="#" method="get">
        nombre<input type="text" name="nombre"><br>
        apellido <input type="text" name="apellido" id=""><br>
        email <input type="text" name="email" id=""><br>
        DNI<input type="text" name="dni" id=""><br>
        telefono<input type="text" name="telefono" id=""><br>
        poblacion<input type="text" name="poblacion" id=""><br>
        <input type="submit" value="enviar" name="env">
    </form>
    <?php
    if (isset($_GET["env"])){
        //echo "entrado";
        $letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
        $fechaA = getdate();
        $salida = array($fechaA["year"]."-".$fechaA["mon"]."-".$fechaA["mday"]." ".$fechaA["hours"].":".$fechaA["minutes"].":".$fechaA["seconds"].";");
        $nombre = $_GET["nombre"]." ".$_GET["apellido"].";";
        $email = $_GET["email"].";";
        $dni = $_GET["dni"].";";
        $telefono = $_GET["telefono"].";";
        $poblacion = $_GET["poblacion"];
        array_push($salida, $nombre, $email, $dni, $telefono, $poblacion);
        var_dump($salida);
        $letra = substr($_GET["dni"],-1);
        $num = substr($_GET["dni"],0,-1);
        echo $num. $letra;
        $resto = $num%23;
        echo $resto;
        $letraBuena= $letras[$resto];
        echo $letraBuena;
        if (in_array("",$salida)||in_array(";",$salida)){
            echo "<p style='color:red'>No debe haber campos vacios";
        }else{
            if ($letraBuena != $letra){
                echo "<p style='color:red'> la letra no coincide con el dni";
            }else{
                echo "Estupendo coincide";
                $archivo = fopen("datos_e12.txt", "a");
                for ($i = 0 ; $i < count($salida); $i++){
                fwrite($archivo,$salida[$i]);
                }
                fwrite($archivo, "\r\n");
                fclose($archivo);
            }
        }
    }

    ?>

</body>
</html>