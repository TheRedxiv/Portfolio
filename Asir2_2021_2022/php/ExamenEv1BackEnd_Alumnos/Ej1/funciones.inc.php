
<?php
//Fernandez Cuesta Jose Manuel
    function es_primo($a){
        if ($a % 2 == 0){
            return "0";
        }
        $error = 0;
        //bucle para comprobar si es primo
        for ($i = 3; $i <= sqrt($a); $i++){
            if ($a % $i == 0){
                $error=1;
                return "0";
            }
        }
        return "1";
    }
?>