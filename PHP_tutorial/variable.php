<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>variable php</title>
</head>
<body>
  <?php
  $str = "Hello , This is Variable Example";
  $num = 5;
  $float1 = 5.2;

  //Print Variable in php
  echo "<h1>" . $str . "</h1>";
  echo "<h2>" . $num . "</h2>";
  echo "<h3>" . $float1 . "</h3>";

  echo "Constant Varible create" . "<br>";
  define("Leptops","HP,Lenovo and Asus");
  echo Leptops;
  ?>
</body>
</html>