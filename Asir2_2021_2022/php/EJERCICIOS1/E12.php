<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--.Diseñar un script PHP que reciba los datos de un formulario mediante el método GET
    (nombre, apellidos, email, dni, telléfono y población) y los almacene en un fichero
    externo “datos_e12.txt”, añadiendo una nueva línea de la forma:
    Fecha;NombreCompleto;Email;NIF;Telefono;Población
    La fecha será la del sistema y se grabará de la forma “aaaa/mm/dd hh:mm:ss”. El NIF
    estará compuesto por el número de DNI seguido de la letra que le corresponde. -->
</head>
<body>
    <?php
    //require(file) ---> pide el file 
    //include(file) ---> pide el file pero no madatory
    if (in_array("",$_GET)){ 
        echo "<p style='color:red'>no puedes dejar campos vacios";
    }else{
        if (isset($_GET["enviar"])){
            $letras = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
            $fecha = date("Y/m/d H:i:s");
            $NCompleto = $_GET["apellidos"].", ".$_GET["Nombre"];
            $email = $_GET["email"];
            $DNI = $_GET["dni"];
            $telefono = $_GET["telefono"];
            $poblacion = $_GET["poblacion"];
            $letra = substr($DNI, -1);
            $numero = substr($DNI, 0, -1);
            $letraBuena = $letras[$numero % 23];
            if ($letraBuena == $letra){
                $salida = array($fecha, ";".$NCompleto, ";".$email, ";".$DNI, ";".$telefono, ";".$poblacion);
                var_dump($salida);
                $archivo = fopen("datos_e12.txt","a");
                for ($i = 0; $i < count($salida) ; $i++){
                    fwrite($archivo,$salida[$i]);
                }
                fwrite($archivo, "\r\n");
                fclose($archivo);
            }else{
                echo "<p style='color:red'> el dni no esta bien puesto";
            }


        }
    }
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        nombre<input type="text" name="Nombre"><br>
        apellido<input type="text" name="apellidos"><br>
        email<input type="text" name="email"><br>
        dni<input type="text" name="dni"><br>
        telefono<input type="text" name="telefono"><br>
        poblacion<input type="text" name="poblacion"><br>
        <input type="submit" value="enviar" name="enviar"><br>
    </form>
</body>
</html>