<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <table border="2">
    <?php 
        define("TAMANIO", 10);
        for($i=0;$i<TAMANIO;$i++){
            echo "<tr>";
            for($e=1;$e<TAMANIO;$e++){
                if ($e == $i+1){
                echo "<td style='background-color:grey'>$i$e</td>";
                } else {
                    echo "<td style='background-color:white'>$i$e</td>";
                }
            }
            $a = ($i+1)*10;
            if ($e == $i+1){
                echo "<td style='background-color:grey'>$a</td>";
                } else {
                    echo "<td style='background-color:white'>$a</td>";
                }
            echo "</tr>";
        } 
    ?>
    </table>
</body>
</html>