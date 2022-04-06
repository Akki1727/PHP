<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation Page</title>
  <style>
    .error {
      color: #ff6347;
    }
  </style>
</head>

<body>
  <?php

  $nameErr = $emailErr = "";
  // $websiteErr = "";
  $name = $email = $phone = $gender = $comment = $age = "";
  //  $website = "";

  if (isset($_POST["submit"])) {
    $phone = test_input($_POST['phone']);
    $gender = test_input($_POST['gender']);
    $comment = test_input($_POST['comment']);
    $age = test_input($_POST['age']);
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
  }


  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <h2>Validation Form</h2>
  <p><span class="error">* required field</span></p>
  <form method="POST">
    Name:<br> <input type="text" name="name" id="name"><span class="error">* <?php echo $nameErr; ?></span><br>
    email:<br> <input type="text" name="email" id="email"><span class="error">* <?php echo $emailErr; ?></span><br>
    phone:<br> <input type="text" name="phone" id="phone"><br>
    gender:<br> <input type="text" name="gender" id="gender"><br>
    comment:<br> <input type="text" name="comment" id="comment"><br>
    age:<br> <input type="text" name="age" id="age"><br>

    <input type="submit" value="Click Here" name="submit">

  </form>

  <?php
  echo "<h1>Your Input is :</h1>";
  echo "Name :" . $name . "<br>";
  echo "email:" . $email . "<br>";
  echo "phone:" . $phone . "<br>";
  echo "gender:" . $gender . "<br>";
  echo "comment:" . $comment . "<br>";
  echo "age:" . $age . "<br>";
  ?>


</body>

</html>