<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>CV Sylwia Tworek</title>
	
	<meta name="description" content="CV Sylwia Tworek">
	<meta name="keywords" content="Sylwia, Tworek, CV, curriculum, vitae, życiorys, sylwia_tworek, sylwiatworek, tworeksylwia">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/css/fontello.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">

	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" </script>
	<![endif]-->
	
	<script src="zegar.js"></script>
	
</head>

<body onload="dataczas();">

	<div class= "container">
	
	
	<?php 
		include "myheader.php";
	?>
	
		<nav class="nav nav-pills nav-fill">
			<a class="nav-item nav-link" href="index.php#wyksztalcenie"> Wykształcenie </a>
			<a class="nav-item nav-link" href="doswiadczenie.php#doswiadczenie"> Doświadczenie </a>
			<a class="nav-item nav-link active" href="#umiejetnosci"> Umiejętności </a>
			<a class="nav-item nav-link" href="kursy.php#kursy"> Kursy </a>
			<a class="nav-item nav-link" href="projekty.php#projekty"> Projekty </a>
			<a class="nav-item nav-link" href="ostronie.php#ostronie">  O stronie </a>
		</nav>

		<section id="umiejetnosci">
		
			<div class="box">
				<h3> Python </h3>
				<div class="percent">
					<div style="width: 15%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> C++ </h3>
				<div class="percent">
					<div style="width: 10%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> JAVA </h3>
				<div class="percent">
					<div style="width: 5%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> SQL </h3>
				<div class="percent">
					<div style="width: 10%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> html </h3>
				<div class="percent">
					<div style="width: 20%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> CSS </h3>
				<div class="percent">
					<div style="width: 20%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> AutoCAD </h3>
				<div class="percent">
					<div style="width: 90%;"></div>
				</div>
			</div>
			
			<div class="box">
				<h3> GIMP </h3>
				<div class="percent">
					<div style="width: 50%;"></div>
				</div>
			</div>
			
		</section>
		
	<?php 
		include "myfooter.php";
	?>
		
		
	</div>
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>