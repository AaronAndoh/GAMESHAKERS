<?php 
// source : https://youtu.be/nb5BHPYbBBY
include 'config.php'; //databas connection

error_reporting(0);

session_start(); //start session to store variable+

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) { //when submt button is clicked
	$username = $_POST['username']; //setting variables from the various inputs.
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	
	if ($password == $cpassword) { // checking to see if the two passwords are equal
		$sql = "SELECT * FROM tbl_member WHERE email='$email'"; // sellecting from the database table tbl_member where the email is equal to what was typed.
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tbl_member (username, email, password) 
					VALUES ('$username', '$email', '$password')"; //inserting into the database using the valid input from the forms
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>"; // alerts if succcessfully
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";// else 
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>"; // appears when email is already recorded
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>"; // appears when password doesnt match
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Game Shakers</title>
</head>
<body>
	<div class="container"> 
		<form action="" method="POST" class="login-email"> <!--the form for the sign up-->
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Min 8 char,at least 1 letter & 1 number" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required > <!--regex 

Minimum eight characters, at least one letter and one number: -->
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button> <!--submit button-->
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>