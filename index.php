<!DOCTYPE html>
<html>
<head>
	<title>Online Scheduling</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/icon" href="logo1.png">
	<script src="https://kit.fontawesome.com/d4e31c1f52.js" crossorigin="anonymous"></script>
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
	.col{
		flex-basis: 50%;
		margin-top: 100px;
	}
	.card1{
		height: 330px;
		width: 290px;
		display: inline-block;
		border-radius: 10px;
		padding: 20px 25px;
		box-sizing: border-box;
		cursor: pointer;
		margin: 20px 25px;
		background-image: url(doctor.jpg);
		background-position: center;
		background-size: cover;
		transition: transform 0.5s;
	}
	.card2{
		height: 330px;
		width: 290px;
		display: inline-block;
		border-radius: 10px;
		padding: 20px 25px;
		box-sizing: border-box;
		cursor: pointer;
		margin: 20px 25px;
		background-image: url(pulse.jpg);
		background-position: center;
		background-size: cover;
		transition: transform 0.5s;
	}
	.card3{
		height: 330px;
		width: 290px;
		display: inline-block;
		border-radius: 10px;
		padding: 20px 25px;
		box-sizing: border-box;
		cursor: pointer;
		margin: 20px 25px;
		background-image: url(heartbeat.jpg);
		background-position: center;
		background-size: cover;
		transition: transform 0.5s;
	}
	.card4{
		height: 330px;
		width: 290px;
		display: inline-block;
		border-radius: 10px;
		padding: 20px 25px;
		box-sizing: border-box;
		cursor: pointer;
		margin: 20px 25px;
		background-image: url(checkup.png);
		background-position: center;
		background-size: cover;
		transition: transform 0.5s;
	}
	.card1:hover{
		transform: translateY(-20px);
	}
	.card2:hover{
		transform: translateY(-20px);
	}
	.card3:hover{
		transform: translateY(-20px);
	}
	.card4:hover{
		transform: translateY(-20px);
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

	button{
		width: 200px;
		padding: 15px 0;
		text-align: center;
		margin: 20px 10px;
		border-radius: 25px;
		color: white;
		border-color: white;
		background: transparent;
		cursor: pointer;
		position: relative;
	}
	button:hover{
		border: none;
		background-color: gray;
		color: black;
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

			<div class="content">
				<div class="col">
					<h1>BOOK APPOINTMENT NOW</h1>
					<p><h2>Bethesda Medical and Diagnotis Center</h2></p>
					<div>
						<a href="#"><button type="button">GET STARTED</button></a>
					</div>
				</div>
				<div class="col">
					<div class="card1">
						
					</div>
					<div class="card2">
						
					</div>
					<div class="card3">
						
					</div>
					<div class="card4">
						
					</div>
				</div>
			</div>
	</div>

</body>
</html>