<?php
$filas=$_GET['filas'];
$columnas=$_GET['columnas'];
$minas=$_GET['minas'];
//Prueba para el push
if($minas<($filas*$columnas)){
    //Inicializamos el arreglo
    for($x=0;$x<$filas;$x++){
            for($y=0;$y<$columnas;$y++){
                $arreglo[$x][$y]=0;
            }
        }
	echo "Parte de prueba";
    //Pintamos las minas
    while($z<$minas){
             $random1=rand(0,$filas-1);
             $random2=rand(0,$columnas-1);

          if($arreglo[$random1][$random2]!="-1"){
              $arreglo[$random1][$random2]="-1";
              $z=$z+1;
          }
        }
    echo "<fieldset>";
    echo "<legend>Resultado</legend>";
    //Imprimimos el arreglo
    for($x=0;$x<$filas;$x++){
            for($y=0;$y<$columnas;$y++){
                echo $arreglo[$x][$y]. " - ";
            }
            echo"<br/>";
        }
    echo "</fieldset>"    ;
}


        ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            <fieldset>
             <legend>Grid</legend>
                Filas: <input type="text" name="filas" /><br />
                Columnas: <input type="text" name="columnas" /><br />
                Minas <input type="text" name="minas" /><br />
                 <input type="submit" />
            </fieldset>
        </form>

    </body>
</html>