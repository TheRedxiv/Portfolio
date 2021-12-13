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
    function MatrMutp($A,$B){
        $salida = array();
        $F=count($A);
        $C=count($B[0]);
        echo $F;
        echo $C;
        if ($F != $C){
            echo "Estas matrices no se pueden multiplicar";
        }else{
            for ($f = 0; $f < $C; $f++){
                for ($c = 0; $c <$F; $c++){
                    $Fila = [];
                    $Col = [];
                    $token = 0;
                    for ($a = 0; $a < $C ; $a++){
                        array_push($Fila,$A[$f][$a]);
                        //var_dump($Fila);
                        //echo "<br>";
                    }
                    for ($b = 0; $b < $F ; $b++){
                        array_push($Col,$B[$b][$c]);
                        //var_dump($Col);
                        //echo "<br>";
                    }
                    for ($i = 0; $i < $C ; $i++){
                        $token += $Fila[$i]*$Col[$i];
                    }
                    array_push($salida, $token);
                }
            }
            return $salida;
        }

    }
    function MatrMutp2($A,$B){
        $salida = array();
        $F=count($A);
        $C=count($B[0]);
        echo $F;
        echo $C;
        if ($F != $C){
            echo "Estas matrices no se pueden multiplicar";
        }else{
            $a = 0;
            $b = 0;
            for ($f = 0; $f < $C; $f++){
                $Fila = $A[$f];
                for ($c = 0; $c <$F; $c++){
                    $Col = [];
                    $token = 0;
                    //for ($a = 0; $a < $C ; $a++){
                        //array_push($Fila,$A[$f][$a]);
                        //var_dump($Fila);
                        //echo "<br>";
                    }
                    //for ($b = 0; $b < $F ; $b++){
                        //array_push($Col,$B[$b][$c]);
                        //var_dump($Col);
                        //echo "<br>";
                    }
                    for ($i = 0; $i < $C ; $i++){
                        $token += $Fila[$i]*$Col[$i];
                    }
                    array_push($salida, $token);
                }
                $a++;
            }
            return $salida;
        }

    }
    $matriz = array(array(2,0,1),array(3,0,0),array(5,1,1));
    $matrizB = array(array(1,0,1),array(1,2,1),array(1,1,0));
    echo "<pre>";
    var_dump($matriz);
    echo "<pre>";
    var_dump(MatrMutp($matriz,$matrizB));
    ?>
</body>
</html>