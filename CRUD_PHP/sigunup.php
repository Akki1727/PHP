<?php

include 'config.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];

  if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
    echo "Value Empty";
  }

  if($password == $confirmpassword){
    echo "password Match";
  }else{
    echo "Password and Confirm Password not match";
  }
  $sql = 'INSERT INTO users (username,email,password) VALUES ("'.$username.'","'.$email.'","'.$password.'")';
  echo $sql;

  $result = $conn->query($sql);

  if($result == true){
    echo "New Data Inserted..";
  }
  else{
    echo "Error".$sql."---------------------<br>".$result."-------------><br>".$conn->error;
  }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup in PHP</title>
</head>
<body>



<form action="" method="post">
  UserName : <input type="text" name="username" id="username"><br>
  Email : <input type="text" name="email" id="email"><br>
  Password : <input type="password" name="password" id="password"><br>
  Confirm Password : <input type="password" name="confirmpassword" id="confirmpassword"><br>

  <input type="submit" value="Submit" name="submit">
</form>
  
</body>
</html>