<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
    <h2>La suma de los Numeros Pares y cuantos hay</h2>
    <?php

    $i=1;
   $Cont=0;
   $Cont2=0;


    while ($i<=100) {

    if (($i%2)==0 ) {
      $Cont2++;
      $Cont=$Cont+$i;
   echo "$Cont <br>";
    }
    $i++;
    }
   echo "La Suma de Los Pares es : $Cont <br> ";
   echo "Hay : $Cont2 ";
     ?>
     </div>
  </body>
</html>
