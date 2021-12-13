<!--FERNANDEZ CUESTA JOSE MANUEL-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernandez Cuesta, Jose Manuel Ejercicio1</title>
    
</head>
<body>
    <form action="#" method="POST">
        Numero<input type="text" name="numero" id="numero">
        <input type="submit" value="enviar" name="enviar">
    </form>
    <?php
    if (isset($_POST["enviar"])){
        if ($_POST["numero"] < 100 || $_POST["numero"] >= 1000){
            echo 0;
        }else{
            include 'funciones.inc.php';
            echo es_primo($_POST["numero"]);
        }
    }
    ?>
</body>
</html>