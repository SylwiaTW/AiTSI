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
			<a class="nav-item nav-link active" href="#wyksztalcenie"> Wykształcenie </a>
			<a class="nav-item nav-link" href="doswiadczenie.php#doswiadczenie"> Doświadczenie </a>
			<a class="nav-item nav-link" href="umiejetnosci.php#umiejetnosci"> Umiejętności </a>
			<a class="nav-item nav-link" href="kursy.php#kursy"> Kursy </a>
			<a class="nav-item nav-link" href="projekty.php#projekty"> Projekty </a>
			<a class="nav-item nav-link" href="ostronie.php#ostronie">  O stronie </a>
		</nav>

		<article id="wyksztalcenie">
				
				<div class="row wpis">
					<div class="col-4 col-md-3"> 
						<img src="img/Elka.jpg" alt="Logo elki">
					</div>
					
					<div class="col-8 col-md-9 d-flex align-items-center"> 
						<dl>
							<dt>2022 - 2024</dt>
							<dd>Studia magisterskie na Wydziale Elektroniki i Technik Informacyjnych PolitechnikI Warszawskiej, na kierunku Informatyka</dd>
						</dl>
					</div>
				</div>
				
				<div class="row wpis">
					<div class="col-4 col-md-3"> 
						<img src="img/logo_ee.png" alt="Logo wydziału elektrycznego">
					</div>
					
					<div class="col-8 col-md-9 d-flex align-items-center">
						<dl>
							<dt>2013 - 2015</dt>
							<dd>Studia magisterskie na Wydziale Elektrycznym Politechniki Warszawskiej, na kierunku Elektrotechnika, specjalność: Elektrotechnika Stosowana, specjalizacja: Technika Świetlna. <br>
								Tytuł obronionej pracy dyplomowej: Oświetlenie i sterowanie oświetleniem w nowoczesnym budynku biurowym </dd>
						</dl>
					</div>
				</div>
				
				<div class="row wpis">
					<div class="col-4 col-md-3"> 
						<img src="img/logo_ee.png" alt="Logo wydziału elektrycznego">
					</div>
					
					<div class="col-8 col-md-9 d-flex align-items-center">
						<dl>
							<dt>2009 - 2013</dt>
							<dd>Studia stacjonarne inżynierskie na Wydziale Elektrycznym Politechniki Warszawskiej, na kierunku Elektrotechnika, specjalność Automatyka i Inżynieria Komputerowa. <br>
								Tytuł obronionej pracy dyplomowej: Wirtualny analizator widma.</dd>
						</dl>
					</div>
				</div>
			
		</article>
		
	<?php 
		include "myfooter.php";
	?>
		
		
	</div>
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>