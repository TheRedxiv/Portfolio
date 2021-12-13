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
    if (isset($_GET["N"])){
        for ($i = 0; $i<=$_GET["N"] && $i<= 20;$i++){
            $salida = 2**$i;
            echo "<p> $salida <br>";
        }
        if ($_GET["N"]>20){
            echo "<p style='color:red'> el numero no debe ser mayor de 20";
        }        
    }   else {
        for ($i = 0; $i<= 10;$i++){
            $salida = 2**$i;
            echo "<p>$salida <br>";
        }
    }
    
    
    ?>
</body>
<form action="E4.php" method="GET" >
        <input type="number" name="N" id="N">
    </form>
</html>