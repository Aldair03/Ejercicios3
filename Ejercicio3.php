<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
      <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
    <h2>Pares</h2>
<?php

$i=1;
while ($i<=100) {
if (($i%2)==0 ) {
        echo "$i <br>"  ;
}
$i++;
}

 ?>
 </div>
  </body>
</html>
