<?php



include "config.php";


if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];

  if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    exit("values Empyt");
  }

  if (isset($_POST['password']) == isset($_POST['confirmpassword'])) {

    $sql = 'SELECT id,password FROM users WHERE username= ?';
    if ($stmt = $conn->prepare($sql)) {
      $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      $stmt->store_result();

      if ($stmt->num_rows > 0) {
        echo "Username is already exists...Try Again";
      } else {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = 'INSERT INTO users (username,email,password) VALUES ("' . $username . '","' . $email . '","' . $password . '")';
        echo $sql;

        $result = $conn->query($sql);
      }
    }
  } else {
    echo "Password and Confirm Password is not match....";
  }
  if ($result == true) {

    echo "New Record Inserted....";
    header('Location:login.html');
  } else {
    echo "Error.." . $sql . "------------<br>" . $result . "---------<br>" . $conn->error;
  }

  $conn->close();
}
