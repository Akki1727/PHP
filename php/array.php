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
 $leptop_brands = array("HP","Dell","Asus","Lenovo");
 echo var_dump($leptop_brands) ."<br>";
 $array = var_dump($leptop_brands[3]);
 echo $array ."<br>";

  // constant Array 
  echo "Constant Array" . "<br>";
  define("Leptops",["HP","Lenovo","Asus"]);
  echo Leptops; 

//  echo $array;
  ?>
</body>
</html>