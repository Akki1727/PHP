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
  echo "This is Inheritance Program " ."<br>" . "Hello" . "<br>";
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
    public function message(){
      echo "Is Cherry is fruit or berry?";
    }
  }

  $cherry = new cherry("Cherry","Red");
  echo $cherry->message()."<br>";
  echo $cherry->intro()."<br>";

 
  
  ?>
</body>
</html>