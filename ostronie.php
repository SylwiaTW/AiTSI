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
			<a class="nav-item nav-link" href="kursy.php#kursy"> Kursy </a>
			<a class="nav-item nav-link" href="projekty.php#projekty"> Projekty </a>
			<a class="nav-item nav-link active" href="#ostronie">  O stronie </a>
		</nav>

		<article id="ostronie" class="wpis">
				
			<h4>Wymagania spełniane przez stronę na przedmiot Architektury i Technologie Systemów Internetowych:</h4>
			<ul>
				<li>Serwis zrealizowany na bazie HTML 5</li>
				<li>Strona sprawdzona walidatorem https://validator.w3.org/ </li>
				<li>Formatowanie przy użyciu CSS</li>
				<li>Kompatybilność z popularnymi przeglądarkami</li>
				<li>Teksty alternatywne przy obrazkach</li>
				<li>Skrypt JavaScript (zegar na górze strony)</li>
				<li>Elementy PHP</li>
				<li>Dobrze przemyślany, wygodny i spójny system nawigacji</li>
				<li>Strona poświęcona opisowi samego serwisu (niniejsza strona)</li>
				<li>Wygodny dostęp do poszukiwanych treści</li>
			</ul>
			
		</article>
		
	<?php 
		include "myfooter.php";
	?>
		
		
	</div>
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>