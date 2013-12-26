<?php
 header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Valiant by Charlie Hoey</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />

	</head>
	<body>

		<div id="loading">
			<div id="bowlG">
				<div id="bowl_ringG">
					<div class="ball_holderG">
						<div class="ballG">
						</div>
					</div>
				</div>
			</div>
			<p>loading</p>
		</div>
		<div id="container"></div> 
		<div id="info">
			<h1>Valiant</h1>
			<h2>by Charlie Hoey</h2>
			<ul class="videoNav">
				<li><a href="http://flimshaw.net/videotest/toll-booth.ogv">Bridge</a></li>
				<li><a href="videos/thumbs-up.ogg" class="active">Thumbs Up!</a></li>
				<li><a href="videos/spacelapse.ogv">SF -> East Bay</a></li>
				<li><a href="videos/toll-booth.ogv">Toll Booth</a></li>
				<li><a href="videos/reno.ogv">Reno, Nevada</a></li>
				
			</ul>
			<div class="percentLoaded">
				<strong class="pct"></strong>
			</div>
		</div>

		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/Three.js"></script>
		<script type="text/javascript" src="js/RequestAnimationFrame.js"></script>
		<script type="text/javascript" src="js/modernizr.js"></script>
		<script type="text/javascript" src="js/main.js"></script>



		</script>
	</body>
</html>
