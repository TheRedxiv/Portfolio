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
    if (isset($_GET["enviar"])){
        $pri = $_GET["pri"];
        $seg = $_GET["seg"];
        echo "$pri + $seg = ".($pri+$seg)."<br>";
        echo "$pri - $seg = ".($pri-$seg)."<br>";
        echo "$pri * $seg = ".($pri*$seg)."<br>";    
        echo "$pri / $seg = ".($pri/$seg)."<br>";
    }
    ?>
    <form action="#" method="get">
        <input type="text" name="pri" id="pri">
        <input type="text" name="seg" id="seg">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>