<!--To align elements horizontally:margin=auto LOL !!-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="theme-color" content="#002060">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon-ios.png" />
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Diligent Tracker</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="animate.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
					<img src="header.png" class="deeply-diligent-logo" alt="DiligentTracker">
					</a>
				</div>
				<div class="collapse navbar-collapse nav-collapse" id="myNavbar" data-toggle="collapse" data-target=".nav-collapse.in">
<!--
					<ul class="nav navbar-nav">
						<li><a href="#top">Home</a></li>
						<li><a href="#profile">About Me</a></li>
						<li><a href="#projects">Projects</a></li>
						<li><a href="#work-experience">Work Experience</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
-->
					<ul class="nav navbar-nav navbar-right social-network-icons">
<!--
						<li><a href="https://www.linkedin.com/in/deep-bhattacharyya-56494bb5/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                        <li><a href="https://www.facebook.com/deeplydiligent"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                        <li><a href="https://twitter.com/deeplydiligent"><i class="fa fa-twitter-square fa-lg"></i></a></li>
-->
                        <li><a href="https://github.com/DeeplyDiligent/DiligentTracker"><i class="fa fa-github-square fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="main">
			<div class="jumbotron profile">
				<div class="w3-container">
					<div class="w3-card-4" style="margin:auto;max-width:750px">
						<header class="w3-container w3-light-grey">
							<h3 class="card-title">Diligent Tracker</h3>
						</header>
						<div class="w3-container">
							<div class="summary container-fluid">
                                Please Enter password:<br>
								<form action="auth.php" method="POST"><input type="password" name="password"><br><br><input type="submit"  value="Submit">
                                <p style="font-family: 'Flamenco'">
                                    <?php $reasons = array("password" => "Wrong Password. Please retry.", "blank" => "You have left the password field blank."); if (isset($_GET["loginFailed"])) echo "<br>".$reasons[$_GET["reason"]]; ?>
                                </p>
                                </form>
                                <p>test password is "password"</p>
							</div>
						</div>
<!--
						<a href="https://deeplydiligent.github.io/">
						<button class="w3-button w3-block w3-dark-grey" href="https://deeplydiligent.github.io/">About The Author&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
						</a>
-->
					</div>
				</div>
			</div>
<!--
            <footer>
                <p class="text-center" style="font-family: 'Flamenco'; font-size:20px">	&copy; Deep Bhattacharyya 2017</p>
            </footer>
-->
		</div>
	</body>
</html>