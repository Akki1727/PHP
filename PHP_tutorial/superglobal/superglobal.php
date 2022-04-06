<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SuperGlobal in PHP</title>
</head>
<body>
  
<?php

echo " Super Global  <br>";

$a = 10;
$b = 12;
function addition(){
  $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
}

addition();
echo $z."<br><br>";

echo "Supar Global SERVER <br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br><br>";

echo "Supar Global REQUEST <br>";

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_REQUEST['name'];
  if(empty($name)){
    echo "Empty Name";
  }else{
    echo $name."<br>";
  }
}

$name = "Hello Akshay";
$searchname = "/Akshay/i";
echo preg_match($searchname,$name)."<br>";

$gname = "Hello Akshay,Akshay is 25 year old, akshay is a Dikshit's Friend";
$searchword = "/ksh/i";
echo preg_match_all($searchword,$gname);

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Name: <input type="text" name="name" id="name" placeholder="name"><br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
