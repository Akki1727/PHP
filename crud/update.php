<?php

include "config.php";

if (isset($_POST['update'])) {
  $user_id = $_GET['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  // $password = $_POST['r'];

  $sql = 'UPDATE users SET firstname="' . $firstname . '", lastname="' . $lastname . '",email="' . $email . '",gender="' . $gender . '" WHERE id="' . $user_id . '"';
  echo $sql;

  $result = $conn->query($sql);
  echo $result;

  if ($result == true) {
    echo "Record Updated....";
    header('Location:view.php');
  } else {
    echo "Error---------->" . $sql . "-------------->" . $conn->error;
  }
}

if (isset($_GET['id'])) {
  $user_id = $_GET['id'];
  $sql = 'SELECT * FROM users WHERE id="' . $user_id . '"';
  // echo $sql;
  $result = $conn->query($sql);
  // echo $result;
  if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
      $firstname = $rows['firstname'];
      $lastname = $rows['lastname'];
      $email = $rows['email'];
      $gender = $rows['gender'];
      
    }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Update Form</title>
    </head>

    <body>

      <h2>User Updates</h2>
      <form method="POST">
        Firts_name:<br> <input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $firstname ?>"><br><br>
        Last_name:<br> <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $lastname ?>"><br><br>
        Email:<br> <input type="text" name="email" id="email" placeholder="abc@gmail.com" value="<?php echo $email ?>"><br><br>

        Gender:<br> <input type="radio" name="gender" id="male" value="Male"<?php if ($gender == 'Male') {echo "checked";}?>>Male <input type="radio" name="gender" id="female" value="Female"<?php if ($gender == 'Female') {echo "checked";} ?>>Female<br><br>

        <input type="submit" name="update">

      </form>
    </body>

    </html>
<?php
  } else {
    header('Location:view.php');
  }
}
?>