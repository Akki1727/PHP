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

  echo "<h3> for Loop </h3>";
  for($i=0;$i<=10;$i++){
    echo "Number: $i <br>";
  }

  echo "<h3> while Loop </h3>";
  $whilevar1 = 1;
  while($whilevar1<=5){
    echo "Number:".$whilevar1."<br>";
    $whilevar1++;
  }

  echo "<h3> ForEach </h3>";
  $color = array("red","green","blue","yellow");
  foreach($color as $value){
    echo "$value <br>";
  }

  echo "<h3> Break Loop </h3>";
  for($x=0; $x<=10; $x++){
    if($x==5){
      break;
    }
    echo "Number:".$x."<br>";
  }

  echo "<h3> Continue Loop </h3>";
  for($y=0;$y<=15;$y++){
    if($y==5){
      continue;
    }
    echo "Number:".$y."<br>";
  }

  echo "<h3> Break Loop in While Loop</h3>";
  $var = 5;
  while($var<15){
    if($var == 9){
      break;
    }
    echo "Number:".$var."<br>";
    $var++;
  }

  echo "<h3> Continue Loop in While Loop</h3>";
  $var = 5;
  while($var<15){
    if($var==9){
      $var++;
      continue;
    }
    echo "Number:  $var <br>";
    $var++;
  }


  ?>
</body>
</html>