<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina dinamica lado del server</title>
</head>
<body>
    Hola hoy es 
    <?php
        $dias_semana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
        echo $dias_semana[date("w")];
    ?>
</body>
</html>