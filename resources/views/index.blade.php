<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VSBS</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
	</head>
	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Register</a>
						</li>
					</ul> 
				</div>
			</div>
		</nav>

		<!--- Image Slider -->
		<div id="slides" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#slides" data-slide-to="0" class="active"></li>
				<li data-target="#slides" data-slide-to="1"></li>
				<li data-target="#slides" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/cars/background.png">
					<div class="carousel-caption">
						<h1 class="display-2">Vehicle Service</h1>
						<h2>Booking System</h2>
						<button type="button" class="btn btn-outline-light btn-lg">REGISTER</button>
						<button type="button" class="btn btn-primary btn-lg">LOGIN</button>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/cars/background2.png">
				</div>
				<div class="carousel-item">
					<img src="img/cars/background3.png">
				</div>	
			</div>
		</div>

		<!--- Jumbotron -->
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lh-9 col-xl-10">
					<p class="lead">This Vehicle Service Booking System allows individuals to book servicing for their vehicles without going to the service centre in person in order to save their time.</p>
				</div>		
			</div>
		</div>
		<!--- Footer -->
		<footer>
			<div class="container-fluid padding">
				<div class="row text-center">
					<div id="inf" class="col-md-3">
						<h4>VSBS</h4>
						<hr class="light">
						<p>(986)-089-8038</p>
						<p>gupta.abhishek988@gmail.com</p>
					</div>
					<div class="col-md-7"></div>
					<div id="con" class="col-md-2">
						<hr class="light">
						<p>Contact Us</p>
						<hr class="light">
						<div class="container-fluid padding">
							<div class="row text-center padding">
								<div class="col-12 social padding">
									<a href="#"><i class="fab fa-linkedin"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-facebook"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<hr class="light-100">
						<h5>&copy; vbsb.com</h5>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>







