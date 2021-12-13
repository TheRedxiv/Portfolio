<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Diseñar una página que muestre los datos del archivo anterior sobre una tabla HTML.
    Cada fila presentará dos columnas: una con la línea obtenida del archivo anterior y otra
    con un checkbox que, si está marcado, resaltará en color rojo el texto de la fila.-->
    <?php
    if ($_POST["PASS"] != "12345"){
        header("Status: 301 Moved Permanently");
        header("Location: E14.php");
        exit;
    }
    ?>
    
    <script>
        function cambiocolor(a){
            var idLinea = `linea${a}`
            var idCheckbox = `checkbox${a}`
            //console.log(idLinea)
            if (document.getElementById(idCheckbox).checked){
                document.getElementById(idLinea).style.color="red";
            }else {
                document.getElementById(idLinea).style.color="black";
            }
        }
    </script>   
</head>
<body>
    <table border="1">
            <?php
            $token = 1;
            if ($archivo = fopen("datos_e12.txt","r")){
                while(!feof($archivo)){
                    $linea = fgets($archivo);
                    if ($linea != ""){
                        echo "<tr>";
                        echo "<td id='linea$token'>$linea</td>";
                        echo "<td><input type='checkbox' name='' id='checkbox$token' onchange='cambiocolor($token)'></td>";
                        echo "</tr>";
                        $token++; }
                }
            }
            ?>
    </table>
</body>
</html>