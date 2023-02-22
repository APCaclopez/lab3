<!DOCTYPE html>
<html>
<head>
	<title>AK</title>
	<link rel="icon" type="image/png" href="./images/crown_icon.png">
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap">
</head>

<body class="homebg">
	<header>
		<div class="container">

			<a href="index"><img src="./images/logo1.png" width="10%" height=auto class="logo"></a>
			<nav>
				<ul>
					<li><a href="index">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="forms">Forms</a></li>
					<li><a href="resources">Resources</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="homegreet">
		<h2 id="text">i am aliyah kirstie.</h2>
	</div>

	<div class="intro">
		<p>comsci student. gamer. music lover.</p>
		<p id="demo"></p>
		<br>
		<p>"love yourself first and everything falls into line." -lucille ball</p>
	</div>


	<footer id="resfoot">
		<div class="row">
			<div class="column">
				<button type="button" class="neon-button" onclick="displayDate()">in what year are we?</button>
				<p id="showDate"></p>
			</div>
			<div class="column">
				<p class="footcont">san junipero inspired.</p>
			</div>
		</div>
	</footer>

	<script src="./js/script.js"></script>
	<script src="./js/object.js"></script>

</body>
</html>