<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 1.6</title>
    </head>
    <body>
        <?php
        if(isset ($_POST['numero'])){
            $numero= $_POST['numero'];
            while($numero!=1){

            echo $numero . "<br/>";
            $numero=($numero%2==0)?$numero/2:($numero*3+1);
            }
          echo $numero;
        
        }
        
        ?>
        <h1>Por favor introduce un numero</h1>

        <form method="POST">
            <input name="numero"/>
            <input type="submit"/>
        </form>

    </body>
</html>
