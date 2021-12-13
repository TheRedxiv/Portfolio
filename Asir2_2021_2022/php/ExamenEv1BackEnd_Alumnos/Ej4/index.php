    <!--Página. Presentar en un menú desplegable los nombres de todos los archivos con extensión gif de una carpeta
    de imágenes que se encuentra en el directorio raíz del ejercicio. No se conoce el nombre exacto de la carpeta,
    lo único cierto es que comienza por “im”, por lo que valdría “imagenes”, “images”, “immagini” o cualquier
    otro nombre que corresponda con el patrón. En caso de que haya más de uno se elegirá el primero que se
    encuentre. Puede que no exista ninguna carpeta que cumpla el patrón.
    Es posible que la carpeta esté vacía o no contenga ninguna imagen.
    Al elegir una de las imágenes del menú de selección, se mostrará su contenido en la misma página con la
    etiqueta <img> de HTML. La página tendrá un encabezado de la forma “Imágenes de la carpeta XXXXXX”,
    indicando el nombre de la carpeta. Se entrega carpeta para pruebas.
    -->
<!DOCTYPE html>
<!--Fernandez Cuesta JoseManuel-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>   
        <?php
        if($dir = opendir(".")){
            $contador=0;
            $token = 0;
            while(($file=readdir($dir)) !== false ){
                if (preg_match("/^im/",$file)&&filetype($file)=="dir"){
                    $token = 1; 
                    if ($dir2 = opendir("./$file")){
                        
                        while (($file2=readdir($dir2))!== false){
                            $contador++;
                            if ($contador == 1){
                                echo "<h1>Imágenes de la carpeta $file</h1>";
                                echo "<form action='#' method='post'>";
                                echo "Lista imágenes <select name='seleciona' onchange='this.form.submit()'>";
                                echo "<option value=nada>---Elige imágen---</option>";
                            }
                            if (preg_match("/\.gif$/", $file2)){
                                $token = 2;
                                echo "<option value='$file/$file2'>$file2</option>";
                            }
                        }
                        if ($contador > 0){
                            echo "</select>";
                            echo "</form>";
                        }
                    }if ($token==1){
                        echo "<br>no habia imágenes en $file";
                    }
                    closedir($dir2);
                }
                
                
            }
            closedir($dir);
        }
        if ($token == 0){
            echo "No existe directorio que cumpla con el patron";
        }
        ?>
    <?php
    if(isset($_POST["seleciona"])){
        $selecciona = $_POST["seleciona"];
        if ($selecciona != "nada"){
            echo "<img src='$selecciona' alt='$selecciona'>";
        }
    }
    ?>
</body>
</html>