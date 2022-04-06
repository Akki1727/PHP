<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Condition PHP</title>
</head>
<body>
  <?php
  echo "Switch Condtion in PHP"."<br>";
  $switch = 7;
  switch($switch){
    case 1:
      echo "You are playing on Easy or 1 Level";
    break;
    case 2:
      echo "You are playing on Moderate or 2 Level";
    break;
    case 3:
      echo "You are playing on Hard or 3 Level";
    break;
    case 4:
      echo "You are playing on Export or 4 Level";
    break;
    default:
      echo "Invalid Input";
  
  }
  ?>
</body>
</html>