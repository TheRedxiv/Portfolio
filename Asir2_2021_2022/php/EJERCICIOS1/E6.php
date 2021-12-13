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
    $peseta = 166.368;
    define("dolar",1.14);
    if(isset($_GET["calcular"])){
        if ($_GET["moneda"]=="peseta"){
            $_GET["conversion"] = $peseta * $_GET["cantidad"];
        }else{
            $_GET["conversion"] = dolar * $_GET["cantidad"];
        }
    } var_dump($_GET["conversion"]);
    ?>
    <form action="#" method="GET">
        <select name="moneda" id="moneda">
            <option value="peseta">peseta</option>
            <option value="dolar">dolar</option>
        </select><br>
        cantidad<input type="number" name="cantidad" id="cantidad" value="<?php echo @$_GET["cantidad"]; ?>">
        conversion <input type="number" name="conversion" id="conversion" value="<?php echo @$_GET["conversion"]; ?>">
        <input type="submit" value="calcular" name="calcular">
    </form>
</body>
</html>