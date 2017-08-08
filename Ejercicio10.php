<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
    <h2>Numero1 <?php $Numero1=10; ?></h2>
    <h2><?php  echo $Numero1; ?></h2>
        <h2>Numero2 <?php $Numero2=15 ?></h2>
          <h2><?php  echo "$Numero2"; ?></h2>
        <?php
        while ($Numero1 <= $Numero2) {
          echo "<br>",$Numero1++  ;
        }
         ?>
</div>
  </body>
</html>
