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
			<a class="nav-item nav-link" href="umiejetnosci.php#umiejetnosci"> Umiejętności </a>
			<a class="nav-item nav-link active" href="#kursy"> Kursy </a>
			<a class="nav-item nav-link" href="projekty.php#projekty"> Projekty </a>
			<a class="nav-item nav-link" href="ostronie.php#ostronie">  O stronie </a>
		</nav>

		<section id="kursy">
				
				<div class="row wpis">
					<div class="col-4 col-md-3"> 
						<img src="img/uouw.jpg" alt="Logo UOUW">
					</div>
					
					<div class="col-8 col-md-9">
						<h4>Podstawy uczenia maszynowego w Pythonie -  Uniwersytet Otwarty Uniwersytetu Warszawskiego</h4>
						<ul>
							<li>wprowadzenie do Pythona środowiska Google Colab i podstawowe informacje o wizualizacji danych</li>
							<li>populacje i próby. Charakterystyki prób i odpowiadające im statystyki: średnia, wariancja, odchylenie standardowe, kwantyle</li>
							<li>wprowadzenie do uczenia maszynowego, uczenie nadzorowane</li>
							<li>prosta prognoza: Regresja liniowa i logistyczna, klasyfikacja i klastrowanie</li>
							<li>analiza oraz oczyszczanie danych i dzielenie na zbiór uczący i testowy. Pojęcie zbalansowania zbioru</li>
							<li>jednokierunkowe sieci neuronowe, perceptron</li>
							<li>konwolucyjne sieci neuronowe</li>
							<li>ucznie nienadzorowane</li>
						</ul>
						
					</div>
				</div>
				
				<div class="row wpis">
					<div class="col-4 col-md-3"> 
						<img src="img/uouw.jpg" alt="Logo UOUW">
					</div>
					
					<div class="col-8 col-md-9">
						<h4>Wprowadzenie do programowania w języku Python -  Uniwersytet Otwarty Uniwersytetu Warszawskiego</h4>
						<ul>
							<li>języki kompilowane i skryptowe</li>
							<li>dane i algorytmy oraz paradygmaty programowania</li>
							<li>podstawowe struktury danych (słownik, lista) i algorytmy</li>
							<li>zintegrowane środowiska i edytory (IDE)</li>
							<li>jupyter notebook</li>
							<li>debugger</li>
							<li>system kontroli wersji (git)</li>
						</ul>
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