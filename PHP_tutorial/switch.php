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
  $switch = 2;
  switch($switch){
    case 1:
      echo "You are playing on Easy or 1 Level <br>";
    break;
    case 2:
      echo "You are playing on Moderate or 2 Level <br>";
    break;
    case 3:
      echo "You are playing on Hard or 3 Level <br>";
    break;
    case 4:
      echo "You are playing on Export or 4 Level <br>";
    break;
    default:
      echo "Invalid Input <br>";
  }

  $switchvar = "Yellow";
  switch($switchvar){
    case "red":
      echo "Your Fav Color is RED <br>";
    break;
    case "blue":
      echo "Your Fav Color is BLUE <br>";
    break;
    case "green":
      echo "Your Fav Color is GREEN <br>";
    break;
    default:
      echo "Your favorite color is neither RED, BLUE, nor GREEN! <br>";

  }
  ?>
</body>
</html>