<?php

include "config.php";
session_start();


if (isset($_POST['submit'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $sql = "select * from users where username = '" . $username . "'";
  $rs = mysqli_query($conn, $sql);
  $numRows = mysqli_num_rows($rs);



  if ($numRows  == 1) {
    $row = mysqli_fetch_assoc($rs);
    if (password_verify($password, $row['password'])) {
      echo "Password verified";
      header('Location:home.html');
    } else {
      echo "Password is Wrong";

      header('Location:login.html?error=Password+is+Wrong');
    }
  } else {
    echo "User Not Found";
    header('Location:login.html?error=User+Not+Found');
  }
}


// if(isset($_POST['submit'])){
//   $username = $_POST['username'];
//   $password = $_POST['password'];

//   function validate($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
// }

// $username = validate($_POST['username']);
// $password = validate($_POST['password']);

// if(empty($username)){
//   header('Location:login.html?error=User Name is Required');
//   exit();
// }else if(empty($password)){
//   header('Location:login.html?error=Password is Wrong');
//   exit();
// }
// $sql = 'SELECT password FROM users WHERE username = "'.$username.'" AND password = "'.$password.'"';

// $result = $conn->query($sql);

// if(mysqli_num_rows($result)==1){
//   $rows = mysqli_fetch_assoc($result);
//   $password = password_verify($_POST['paswword'],$rows[$sql]);
 
//   if($rows['username']===$username && $rows['password']===$password){
//     echo "Logged In!.....";

//     $_SESSION['username'] = $rows['username'];
//     $_SESSION['password'] = $rows['password'];
//     $_SESSION['id'] = $rows['id'];
//     header('Location:home.php');
//     exit();
//   }
//   else{
//     header('Location:login.html?error=Inncorect User Name or Password');
//     exit();
//   }
// }
// else{
//   header('Location:login.html');
//   exit();
// }
?>