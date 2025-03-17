<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $dia = 1;
  switch($dia) {
    case 1:
      echo "es dia lunes";
      break;
    case 2:
      echo "es dia martes";
      break;
    case 3:
      echo "es dia miercoles";
      break;
    case 4:
      echo "es dia jueves";
      break;
    case 5:
      echo "es dia viernes";
      break;
    case 6:
      echo "es dia sabado";
      break;
    case 7:
      echo "es dia domingo";
      break;
    default:
      echo "$dia no es igual a ningun dia de la semana.";
  }
?>
</body>
</html>