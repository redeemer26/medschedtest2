<?php


require 'appointmentconnect.php';
if(isset($_POST['submit'])){
	$fullname=$_POST['fullname'];
	$address=$_POST['address'];
	$contactnumber=$_POST['contactnumber'];
	$appointmentdatetime=$_POST['appointmentdatetime'];
	$dateofbirth=$_POST['dateofbirth'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$email=$_POST['password'];
	$username=$_POST['username'];
	$duplicate = mysqli_query($conn, "SELECT * FROM appointment_tbl WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }

  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO appointment_tbl VALUES('','$fullname','$address','$email','$username','$contactnumber','$appointmentdatetime','$dateofbirth','$password')";
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/d4e31c1f52.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="appointment.css">
	<link rel="icon" type="image/icon" href="logo1.png">
	<title>Appointment Form</title>
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
		
		<div class="wrapper">
 			<h2> Appointment Form </h2>
 			<form method="POST"> 
 			<h4>Personal Information</h4>
 			<div class="input-group">

 			</div>

 		<div class="input-box">
 				<input type="text" id="fullname" placeholder="Full Name" class="name" required name="fullname">
 				
 			</div>


 					<div class="input-group">
 				<input type="address" id="address" placeholder="Address" class="name" required name="address"> 			
 				<div class="input-box">
 				<input type="number" id="contactnumber" placeholder="Contact Number" class="name" required name="contactnumber">
 				
 			</div>
 		</div>
 			<input type="address" id="Email" placeholder="Email" class="name" required name="email"><br><br>
 			<input type="address" id="Username" placeholder="Username" class="name" required name="username">
 			<div class="input-group">
 				<div class="input-box">
 				<h4> Appointment Date and Time</h4>
 				<input type="datetime-local" id="appointmentdatetime" class="appDate" required name="appointmentdatetime">

 			<div class="input-group">
 				<div class="input-box">
 					

 			<h4> Date Of Birth </h4>
 				<input type="date" id="dateofbirth" class="appDate" required name="dateofbirth">
 			</div>
 		</div>
 		 		
 		</div>

 	</div>
 		<input type="password" id="Password" placeholder="Password" class="name" required name="password"><br><Br>
 		<input type="password" id="confirmpassword" placeholder="Confirm Password" class="name" required name="confirmpassword">

 			<a href="app.php"><button type="submit" name="submit">Send Application Form</button></a>
 				</form>
 			</div>

	</div>

</body>
</html>