<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
       <h2>Suma de Pares</h2>
       <?php

       $i=1;
$Cont=0;


       while ($i<=100) {

       if (($i%2)==0 ) {

         $Cont=$Cont+$i;
      echo "$Cont <br>";
       }
       $i++;
       }
echo "La Suma de Los Pares es : $Cont";
        ?>
        </div>
  </body>
</html>
