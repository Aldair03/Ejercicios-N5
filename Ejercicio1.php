<?php
$Notas[]="3,9";
$Notas[]="5,9";
$Notas[]="2,7";
$Notas[]=($Notas[0]+$Notas[1]+$Notas[2])/3;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
      <h2>Promedio de tres Notas</h2>
      <br>
  <h2>Nota 1 : <div class="Cont"><?php echo $Notas[0]; ?></div></h2>
  <h2>Nota 2 : <div class="Cont"><?php echo $Notas[1]; ?></div></h2>
  <h2>Nota 3 : <div class="Cont"><?php echo $Notas[2]; ?></div></h2>

    <h2>El Promedio es : <div class="Cont"><?php echo $Notas[3]; ;?></div></h2>
    </div>
  </body>
</html>
