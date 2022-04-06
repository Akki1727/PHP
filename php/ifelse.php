<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condition PHP</title>
</head>
<body>
  <?php
  echo "Condition in php" . "<br>" ;
  $var = 11;
  if($var > 9){
    echo $var . "<br>";
  }
  else{
    echo "The Condition Did not matched..." . "<br>";
  }

  echo "Check the number is divided by 2 ,3 or both" . "<br>";
  $var = 11;
  if($var%2==0 && $var%3==0){
    echo "Number is Divided by 2 & 3" . "<br>";
  }elseif($var%2==0){
    echo "Number is Divided by 2" . "<br>";
  }elseif($var%3==0){
    echo "Number is Divided by 3" . "<br>";
  }else{
    echo "Number is Not Divided by 2 & 3" . "<br>";
  }


  
?>
</body>
</html>