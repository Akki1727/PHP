<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops in PHP</title>
</head>
<body>
  <?php
  echo "<h1>" . "Loops in Php" . "</h1>";

  echo "<h3>" . "While Loop" . "</h3>";
  $whilevar = 2;
  while($whilevar<=10){
    echo "Number : $whilevar" . "<br>";
    $whilevar++;
  }

  echo "<h3>" . "do While Loop" . "</h3>";
  $dovar = 11;
  do{
    echo "number: $dovar <br>";
    $dovar++;
  }while($dovar<=10);

  echo "<h3>" . "for Loop" . "</h3>";
  for($i=0;$i<=10;$i++){
    echo "Number: $i <br>";
  }
  ?>
</body>
</html>