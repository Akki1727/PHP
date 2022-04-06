<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $conn = mysqli_connect('localhost', 'root', '', 'php_test') or die('Connection Failed:' . mysqli_connect_error());
  if ($conn->connect_error) {
    echo $conn->connect_error;
  } else {
    echo "Hello <br>";

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];
        // echo $name;
        // echo $email;
        // echo $phone;
        // echo $bgroup;

        $sql = 'INSERT INTO users (name,email,phone,bgroup) VALUES ("'.$name.'","'.$email.'","'.$phone.'","'.$bgroup.'")';
        // echo $sql;

        $query = mysqli_query($conn,$sql);
        if($query){
          echo "Data Submited .....";
        }
        else{
          echo "Error.....";
        }
      // echo "DISKHIT";
    }
  }
}
