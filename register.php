<?php
require 'regconnect.php';
if(!empty($_SESSION["id"])){
}
if(isset($_POST["submit"])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $contactnumber = $_POST["contactnumber"];
  $duplicate = mysqli_query($conn, "SELECT * FROM userlogin_tbl WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }

  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO userlogin_tbl VALUES('','$firstname','$lastname','$username','$email','$password','$contactnumber')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Scheduling</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/d4e31c1f52.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/icon" href="logo1.png">
</head>
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		font-family: sans-serif;
	}
	.cover{
		width: 100%;
		height: 100vh;
		background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(healthcarebg.png);
		background-size: cover;
		background-position: center;
	}
	.navbar{
		width: 85%;
		margin: auto;
		padding-right: 35px 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.logo{
		width: 160px;
		cursor: pointer;
	}
	.navbar ul li{
		list-style: none;
		display: inline-block;
		margin: 0 30px;
	}
	.navbar ul li a{
		text-decoration: none;
		color: #fff;
		text-transform: uppercase;
	}
	.submenu1{
		display: none;
	}

	.navbar ul li:hover .submenu1{
		display: block;
		position: absolute;
		background: gray;
	}

	.navbar ul li:hover .submenu1 ul{
		margin: 10px;
	}

	.navbar ul li:hover .submenu1 ul li{
		display: block;
		width: 200px;
		padding: 10px;
		border-radius: 0;
		text-align: left;
		background: transparent;
	}

	.navbar ul li:hover .submenu1 ul li a:hover{
		color: black;
	}
	.content{
		width: 90%;
		height: 50%;
		position: absolute;
		display: flex;
		align-items: center;
		margin-left: 90px;
		text-align: center;
		color: white;
		margin-top: 70px;
	}

	.content h1{
		font-size: 50px;
		margin-top: 200px;

	}
	.content p{
		margin: 30px; auto;
		font-size: 20px;

	}

	.register{
		margin-left: 700px;
	}

	.loginform{
		width: 90%;
		max-width: 600px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background: white;
		padding: 50px 60px 70px;
		text-align: center;
	}

	.loginform h1{			/*REGISTER TITLE */
		font-size: 30px;
		margin-bottom: 60px;
		color: indigo;
		position: relative;
	}
	.input-field{
		background: #eaeaea;
		margin: 15px 0;
		border-radius: 3px;
		display: flex;
		align-items: center;
	}
	input{
		width: 70%;
		background: transparent;
		border: 0;
		outline: 0;
		padding: 18px 20px;
	}

	form p{
		font-size: 15px;
	}
	.submitbtn{
		width: 100%;
	}
	.submitbtn button{
		width: 65%;
		background: #3c00a0;
		color: #fff;
		height: 40px;
		border-radius: 20px;
		border: 0;
		outline: 0;
		cursor: pointer;
	}

	.registerbtn{
		width: 100%;
	}

	.registerbtn button{
		width: 65%;
		background: #3c00a0;
		color: #fff;
		height: 40px;
		border-radius: 20px;
		border: 0;
		outline: 0;
		cursor: pointer;
		
	}

	#submit{
		padding: 12px 30px;
		width: 40%;
		margin-top: 40px;
		background-color: black;
		color: white;
		font-weight: bold;
		border: none;
		outline: none;
		border-radius: 20px;
	}

	.form a{
		text-decoration: none;
		margin-top: 30px;
		color: blue;
	}

	input[type="checkbox"]{
		width: 5%;
	}
	input[type="number"]{
		width: 100%;
	}

</style>
<body>
	<div class="cover">
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="#">APPOINTMENT <i class="fa-sharp fa-solid fa-caret-down"></i></a>
					<div class="submenu1">
						<ul>
							<li><a href="app.php">Book Appointment</a></li>
							<li><a href="#">Appointment Records</a></li>
						</ul>
					</div>
				</li>
				<li></li>
				
			</ul>
			<ul class="register">
				<li><a href="register.php">REGISTER</a></li>
				<li><a href="login.php">LOGIN</a></li>
			</ul>
			

		</div>
		<div class="loginform">
			<h1>REGISTER</h1>
			<form action="" class="form" method="POST">
				<div class="input-group">
					<div class="input-field">
						<input type="text" name="firstname" id="firstname" placeholder="First Name" required>
					</div>
					<div class="input-field">
						<input type="text" name="lastname" placeholder="Last Name" required>
					</div>
					<div class="input-field">
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<div class="input-field">
						
						<input type="number" name="contactnumber" placeholder="Contact Number" required>
					</div>

					<div class="input-field">
						<input type="text" name="username" placeholder="Username" required>
					</div>
					<div class="input-field">
						<input type="Password" name="password" placeholder="Password" required>
					</div>
					<div class="input-field">
						<input type="Password" name="confirmpassword" placeholder="Confirm Password" required>
					</div>
					<br>
					<input type="checkbox" class="checks" required><span>I Agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></span>
					<br><br><br><br><br>
					<div class="submitbtn">
						<button type="submit" name="submit">Create Account</button>
					</div>
					<br>
					<div>
						
						<p>Already have an account? <a href="login.php">Sign in</a></p>
					</div>
				</div>
			</form>
		</div>

	</div>

</body>
</html>