<?php

include "config.php";

$sql = 'SELECT * FROM users';
$counter = 0;
$result = $conn->query($sql);
// var_dump($result);
// echo $result;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>View Page</title>
  <style>
    body {
      background-image: url('download2.jpeg');
      height: 150%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      color: black
    }

    .link {
      text-decoration: none ;
      display: block;
      width: 100px;
      height: 25px;
      background: #4E9CAF;
      padding: 5px;
      text-align: center;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      line-height: 25px;
    }
    .link:hover{
      background-color: black;
      color: white;
    }

    .update:hover{
      background-color: black;
      color: white;
    }
    .delete:hover{
      background-color: black;
      color: white;
    }

    .update{
      text-decoration: none ;
      background: #4E9CAF;
      width: 115px;
      height: 25px;
      padding: 4px;
      border-radius: 5px;
      color: black;
    
      line-height: 25px;
    }

    .delete{
      text-decoration: none ;
      background: red;
      width: 115px;
      height: 25px;
      padding: 4px;
      border-radius: 5px;
      color: black;
   
      line-height: 25px;
    }
  </style>
</head>

<body>
  <h2>Users List</h2>
  <h4><a href="create.php" class="link">New User</a></h4>
  <table border="1" style="width: 100%; text-align: center; border-radius:5px;">
    <tr>
      <th>Sr. No</th>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Action</th>
    </tr>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {

      ?>
          <tr>
            <td><?php echo ++$counter; ?></td>
            <td><?php echo $rows["id"]; ?></td>
            <td><?php echo $rows["firstname"]; ?></td>
            <td><?php echo $rows["lastname"]; ?></td>
            <td><?php echo $rows["email"]; ?></td>
            <td><?php echo $rows["gender"]; ?></td>
            <td>
              <a class="update" href="update.php?id=<?php echo $rows['id']; ?>" class="btn btn-info">Edit/Update</a>
              <a class="delete" href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">Delete</i></a>
            </td>
          </tr>
      <?php  }
      } ?>
    </tbody>
  </table>
</body>

</html>