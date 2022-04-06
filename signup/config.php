<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database Not Connected....------------->".$conn->connect_error);
}

?>