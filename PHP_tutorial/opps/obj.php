<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class in PHP</title>
</head>
<body>
  <?php
  echo "This is class program" . "<br>";
  class Food{
    public $name;
    public $color;

    function set_name($name){
      $this->name = $name;
    }
    function get_name(){
      return $this->name;
    }
  }

  $A = new Food();
  $B = new Food();

  $A-> set_name("Apple");
  $B-> set_name("Mango");

  echo $A->get_name() . "<br>";
  echo $B->get_name() . "<br>";
  echo "This is end of class program";

  ?>
</body>
</html>