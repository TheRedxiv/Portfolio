<?php 
$vector=array(2);
for ($i = 3; count($vector) <=10 ; $i++){
    $primo = 0;
    for ($e = 0; $vector[$e] >= sqrt($i) && $primo==0; $e++){
        if ($i%$vector[$e] == 0){
        $primo = 1;
        }
    }
    if ($primo == 0){
        array_push($vector, $i);
    } 
}
echo "<p>";
for ($i = 0; $i <count($vector) ; $i++){
    echo "$vector[$i] <br>";
}
$vector2=[[2,3,5],[1,2,5],[8,6,9]];
$Matrix=$vector2 * $vector;
var_dump($Matrix);
echo "</p>";
?>