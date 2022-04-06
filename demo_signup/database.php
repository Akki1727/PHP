<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"demo_signup");
    if(!$conn){
        die('Could not Connect My Sql:');
    }
?>