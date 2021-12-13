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
    if (isset($_GET["num"])){
        $numero = $_GET["num"];

    } else {
        $numero = 7;
    }
    echo "<h1> tabla del $numero </h1>";
        for ($i = 1; $i <=10; $i++){
            $number = $numero * $i;
            echo "<p>$numero*$i = $number</p>";
        }
    ?>
    <form action="E2.php" method="GET" >
        <input type="number" name="num" id="num">
    </form>
</body>
</html>