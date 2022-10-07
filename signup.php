<!doctype html>
<html lang="en">
  <head>
  	<title>Registration form</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="apple-touch-icon" href="assets/img/Icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Icon.png">
  </head>
	<body class="body">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap2 py-5">
		      	<h3 class="text-center mb-0"><strong>Register </strong></h3>
		      	<p class="text-center">Register here by entering the information below</p>
						<form action="sign_up.php" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
		      		</div>
	            <div class="form-group">
	              <input type="text"  id="lastname" name="lastname" class="form-control" placeholder="Last name">
	            </div>
	            <div class="form-group">
	              <div style="margin-left: -2px;">
	              	<select name="gender" id="" class="form-control" >
										<option id="select" value="" hidden selected >Select Gender:</option>
										<option style="color:black;" value="Male">Male</option>
										<option style="color:black;" value="Female">Female</option>
										</select>
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="text" id="email" name="email" class="form-control" placeholder="Email">
	            </div>
	            <div class="form-group">
	              <input type="text" id="passwordd" name="passwordd" class="form-control" placeholder="Password">
	            </div>
	            <div class="form-group">
	              <input type="text" id="cpasswordd" name="cpasswordd" class="form-control" placeholder="Confirm Password">
	            </div>
	            <div class="form-group">
	            	<button name="submit" type="submit" class="btn form-control btn-primary rounded submit px-3"><strong>SIGN UP</strong></button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">You have already account?</p>
		          <a href="log in.html" style="color:#0890ff">Login</a>
	          </div>
	          <div class="bth"><a href="index.html">Back to Home</a></div>
	        </div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>