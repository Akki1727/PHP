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
  $leptop_brands = array("HP", "Dell", "Asus", "Lenovo");
  echo var_dump($leptop_brands) . "<br><br><br>";
  $array = var_dump($leptop_brands[3]);
  echo $array . "<br><br><br>";

  // constant Array 
  echo "Constant Array";
  define("Leptops", ["HP", "Lenovo", "Asus"]);
  echo var_dump(Leptops) . "<br><br><br>";

  $cararray = array("BMW", "AUDI", "MUSTANG");
  echo "I Like " . $cararray[0] . "," . $cararray[1] . " and " . $cararray[2] . "<br><br><br>";

  $carcount = array("A", "B", "C", "D");
  echo count($carcount) . "<br>";

  //  echo $array;


  echo "Loop Through an Indexed Array" . "<br><br><br>";

  $alpha = array("q", "f", "e", "a", "c");
  $alphalength = count($alpha);

  for ($x = 0; $x < $alphalength; $x++) {
    echo $alpha[$x];
    echo "<br>";
  }
  echo "<br>";
  echo "Associative Arrays <br>";

  $assosiate = array("name" => "Akshay", "age" => "25");
  echo $assosiate['name'] . " is " . $assosiate['age'] . " year old";

  echo "<br><br><br>";
  echo "Loop Through an Associative Array <br>";

  $looparray = array("name" => "Akshay", "age" => "25");
  foreach ($looparray as $x => $x_value) {
    echo "Key = " . $x . " Value = " . $x_value;
    echo "<br>";
  }

  echo "Multidimensional Arrays <br>";
  $twocar = array(array("Audi", 12, 45), array("BMW", 15, 50));

  echo "car:" . $twocar[0][0] . ", in stoke: " . $twocar[0][1] . ", Sold: " . $twocar[0][2] . "<br>";
  echo "car:" . $twocar[1][0] . ",in stoke: " . $twocar[1][1] . ", Sold: " . $twocar[1][2] . "<br><br>";

  echo "Multidimensional Arrays with loop<br>";
  $twocar1 = array(array("Audi", 12, 45), array("BMW", 15, 50));
  for ($row = 0; $row < 2; $row++) {
    echo "Row Number $row";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>" . $twocar[$row][$col] . "</li>";
    }
    echo "</ul>";
    echo "<br><br>";
  }

  echo "Sorting Array <br>";
  $sortarrat = array('f', 'w', 'a', 'v', 'e', 'u', 'g');
  echo var_dump($sortarrat);
  sort($sortarrat) . "<br>";
  $sortarraycount = count($sortarrat);
  for ($x = 0; $x < $sortarraycount; $x++) {
    echo "Sorting Array in ascending Order :" . $sortarrat[$x];
    echo "<br><br><br>";
  }

  echo "Sorting Array in ascending Order with value :<br>";
  $ascarray = array("Akshay" => "25", "Dikshit" => "12", "Akki" => "26");
  asort($ascarray);
  foreach ($ascarray as $x => $x_value) {
    echo "Key is:" . $x . " and Value is:" . $x_value;
    echo "<br>";
  }

  ?>
</body>

</html>