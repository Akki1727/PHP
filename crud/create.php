<?php

function validation($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
};

include "config.php";

$first_nameErr = $last_nameErr = $emailErr = "";
$first_name = $last_name = $email = "";

if (isset($_POST["submit"])) {
	// $first_name = $_POST['firstname'];
	// $last_name = $_POST['lastname'];
	// $email = $_POST['email'];
	// $password = $_POST['password'];
	// $confirm_password = $_POST['confirmpassword'];
	// $gender = $_POST['gender'];

	if (validation($_POST['firstname']) == '') {
		$err = "Please enter your first name!<br />";
	} elseif (validation($_POST['lastname']) == '') {
		$err = "Please enter your Last name!<br>";
	} elseif (validation($_POST['email'] == '')) {
		$err = "Please enter your email!<br />";
	} else if ($_POST['email']) {
		$email = $_POST['email'];
		if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
			$err = 'Email invalid because wrong number of characters!<br />';
		}
	} else if (validation($_POST['password']) == '') {
		$err = "Please enter your password!";
	} else if (validation($_POST['confirmpassword']) == '') {
		$err = "Please confirm your password!";
	} else if (validation($_POST['confirmpassword'])) {
		$password = $_POST['password'];
		$confirm_password = $_POST['confirmpassword'];
		if ($confirm_password != $password) {
			$err = "Your passwords does not match!<br />";
		}
	} else if ($_POST['gender']) {
		$err = "Please select your gender!";
	}

	$sql = 'INSERT INTO users (firstname,lastname,email,password,gender) VALUES ("' . $first_name . '","' . $last_name . '","' . $email . '","' . $password . '","' . $gender . '")';
	// echo $sql;
	$result = $conn->query($sql);

	if ($result == true) {
		echo "New Record Created...";
		header('Location:view.php');
	} else {
		echo "Error.." . $sql . "------------<br>" . $result . "---------<br>" . $conn->error;
	}



	$conn->close();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp in PHP</title>
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
	</style>
</head>

<body>

	<h2>SignUp Form in PHP</h2>
	<form action="<?php $_PHP_SELF ?>" method="POST">
		Firts_name:<br> <input type="text" name="firstname" id="firstname" placeholder="First Name"><span class="error">* <?php echo $first_nameErr; ?></span><br><br>
		Last_name:<br> <input type="text" name="lastname" id="lastname" placeholder="Last Name"><span class="error">* <?php echo $last_nameErr; ?></span><br><br>
		Email:<br> <input type="text" name="email" id="email" placeholder="abc@gmail.com"><span class="error">* <?php echo $emailErr; ?></span><br><br>
		Password:<br> <input type="password" name="password" id="password" placeholder="Password"><br><br>
		Confirm Password:<br> <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"><br><br>
		Gender:<br> <input type="radio" name="gender" id="male" value="Male">Male <input type="radio" name="gender" id="female" value="Female">Female<br><br>

		<input type="submit" name="submit">
	</form>
</body>

</html>