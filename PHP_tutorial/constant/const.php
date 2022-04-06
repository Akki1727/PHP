<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constant PHP</title>
</head>
<body>
  <h2>Constant PHP</h2>
  <?php
  
  define("A",'Hello World');
  echo A."<br>"; 

  define("Array1",['A','B','C']);
  echo Array1[2].'<br>';

  define('global1',['sdf','asdas','cqw']);
  function global_array(){
    echo global1[0];
  }

  global_array();



  ?>
</body>
</html>