<?php
if (isset($_POST['submit'])) {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$gender =$_POST['gender'];
	$email = $_POST['email'];
	$passwordd  = $_POST['passwordd'];
	$cpasswordd = $_POST['cpasswordd'];

	$counter = 0;

	if (empty($fname)) {
		echo "<h5>Please Enter Firt name!</h5>";
	} else {
		$counter++;
	}
	if (empty($lname)) {
		echo "<h5>Please Enter Last name!</h5>";
	} else {
		$counter++;
	}
	if (empty($gender)) {
		echo "<h5> Please Select your Gender!</h5>";
	} else {
		$counter++;
	}
	if (empty($email))  {
		echo "<h5>Please Enter Email!</h5>";
	} else {
		$counter++;
	}
	if (empty($passwordd)) {
		echo "<h5>Please Enter Password!</h5>";
	} else {
		$counter++;
	}
	if (empty($cpasswordd)) {
		echo "<h5>Please Enter Confirm Password!</h5>";
	} else {
		$counter++;
	}
	if ($passwordd != $cpasswordd) {
		echo "<h5>Your Password does not match on your confirm your password!</h5>";
	} else {
		$counter++;
	}
	if ($counter ==7) {


?>
		<h1>Registration Successful!</h1>
		<ul>
			<li>Firstname: <span><?php echo htmlentities($fname) ?></span></li>
			<li>Lastname: <span><?php echo htmlentities($lname) ?></span></li>
			<li>Gender: <span><?php echo htmlentities($gender) ?></span></li>
			<li>Email: <span><?php echo htmlentities($email) ?></span></li>
			<li>Password: <span><?php echo htmlentities($passwordd) ?></span></li>
			<li>Confirm Password: <span><?php echo htmlentities($cpasswordd) ?></span></li>
		</ul>

<?php
		$counter = 0;
	}
};
?>

<a href="log in.html"><button>Return to registration page</button></a>
