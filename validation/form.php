<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation form</title>
</head>

<body>


<?php
  $fullname = $email = $phone = $gender = $comment = $age = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $fullname = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $gender = test_input($_POST['gender']);
    $comment = test_input($_POST['comment']);
    $age = test_input($_POST['age']);
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  ?>
  <form  method="POST" action="<?php echo htmlspecialchars($_PHP_SELF);?>">
    Name:<br> <input type="text" name="name" id="name"><br>
    email:<br> <input type="text" name="email" id="email"><br>
    phone:<br> <input type="text" name="phone" id="phone"><br>
    gender:<br> <input type="text" name="gender" id="gender"><br>
    comment:<br> <input type="text" name="comment" id="comment"><br>
    age:<br> <input type="text" name="age" id="age"><br>

    <input type="submit" value="Click Here">

  </form>


  
  <?php
  echo "<h1>Your Input is :</h1>";
  echo "Name :" .$fullname . "<br>";
  echo "email:" .$email . "<br>";
  echo "phone:" .$phone . "<br>";
  echo "gender:" .$gender . "<br>";
  echo "comment:" .$comment . "<br>";
  echo "age:" .$age . "<br>";
  ?>
</body>

</html>