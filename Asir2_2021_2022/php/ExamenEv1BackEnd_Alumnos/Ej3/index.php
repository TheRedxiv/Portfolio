<!--Script. Crear dentro de la carpeta palabras un archivo denominado palabras_<letra>.txt que será un extracto
de las palabras que están en el archivo palabras.txt que comiencen por la letra que recibe el script por el
método GET. Este carácter debe ser una letra del alfabeto inglés (de la a a la z), escrita tanto en minúscula
como en mayúscula. Las palabras del nuevo archivo deberán estar ordenadas alfabéticamente en el archivo
de salida. Se grabará una palabra por línea. El script debe devolver uno de los siguientes mensajes de texto:
• Falta parámetro por la url
• Letra no válida
• No se ha creado el archivo <nombre_archivo.txt> porque no hay palabras en el archivo origen que
comiencen por la letra <letra>”
• Se ha creado con éxito el archivo <nombre_archivo.txt>”-->

    <?php
    //Fernandez Cuesta, Jose Manuel
    if (isset($_GET["letra"])){
        if (preg_match("/^[a-zA-Z]$/",$_GET["letra"])){
            $letraminus = strtolower($_GET["letra"]);
            //echo $letraminus ;
            $nombre = "palabras_$letraminus.txt";
            $lista=[];
            if($archivo= fopen("./palabras/palabras.txt","r")){
                while(!feof($archivo)){
                    $linea = fgets($archivo);
                    if (preg_match("/^$letraminus/", $linea)){
                        //echo $linea;
                        array_push($lista, $linea);
                    }
                }
                fclose($archivo);
                if ($lista == []){
                    echo "No se ha creado el archivo ./palabras/$nombre porque no hay palabras en el archivo origen que comiencen por la letra ".$_GET["letra"];
                }else{
                    sort($lista);
                    //var_dump($lista);
                    if ($archivo2 = fopen("./palabras/$nombre", "w")){
                        for ($i = 0 ; $i < count($lista); $i++){                       
                            fwrite($archivo2, $lista[$i]);
                        }
                        fclose($archivo2);
                        echo "Se ha creado con éxito el archivo /palabras/$nombre";       
                    }
                }
            }
        }else{
            echo "Letra".$_GET["letra"]."no válida";
        }
    }else{
        echo "Falta parámetro por la url";
    }
    ?>
