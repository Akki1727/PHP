<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constructor in PHP</title>
</head>
<body>
  <?php

use cherry as GlobalCherry;

  echo "This is Polymorphism Program " ."<br>" . "Hello" . "<br>";
  class fruit{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
      $this->name= $name;
      $this->color = $color;
    }
    
    public function intro(){
      echo "A {$this->name} is a Fruit and the color of fruit is {$this->color}.";
    }
   
  }

  class cherry extends fruit{

    public $weight;
    public function __construct($name,$color,$weight){
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro()
    {
      echo "the Fruit is {$this->name}, is color is {$this->color} and weight is {$this->weight}gm.";
    }
   
  }

  $cherry = new cherry("Cherry","Pink","100");
  $cherry->intro();
 
  
  ?>
</body>
</html>