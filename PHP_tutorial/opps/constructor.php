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
  echo "This is Constructor Program " . "<br>" . "Hello" . "<br>";
  class fruit
  {
    public $name;
    public $color;

    function __construct($name, $color)
    {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name()
    {
      return $this->name;
    }
    function get_color()
    {
      return $this->color;
    }
  }

  $banana = new fruit("Banana", "Yellow");
  // $mango = new fruit("mango","orang");

  echo $banana->get_name() . "<br>";
  echo $banana->get_color();

  ?>
</body>

</html>