<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
       <h2>Suma</h2>
<?php
$i=1;
$Cont=0;
while ($i <= 100) {
  $Cont=$Cont+$i;
  echo $Cont,"<br>";
  $i++  ;
}
echo "La Suma de todo es : $Cont";
  ?>
  </div>
  </body>
</html>
