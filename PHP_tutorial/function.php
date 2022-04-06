<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function in PHP</title>
</head>

<body>
  <?php

  echo "Function in PHP" . "<br>";
  function basic()
  {
    for ($i = 0; $i <= 10; $i++) {
      echo "Number: $i <br>";
    }
    echo "<br><br>";
  }
  basic() . "<br>";

  echo "Function with arguments <br>";
  function arg($arg)
  {
    echo "Hello:" . $arg . "<br>";
  }

  arg("Akshay");

  echo "Adding a number using argument";
  function addvalue($a, $b)
  {
    echo $a + $b . '<br>';
  }

  echo addvalue(5, '5 DAYS');


  // declare(strict_types=1);
  // echo "Adding a number using strict argument";
  // function addvalue1($a,$b){
  //   echo $a+$b.'<br>';
  // }

  // echo addvalue1(5,'5 DAYS');

  echo "passing by referance <br>";
  function ref(&$value)
  {
    $value += 5;
  }

  $num = 5;
  echo "<br>";
  echo $num;
  echo "<br>";
  ref($num);
  echo $num;

  ?>

</body>

</html>