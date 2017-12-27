<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ogłoszenia lokalne</title>
	<link rel="stylesheet" href="style/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Risque&amp;subset=latin-ext" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<header class="container">
		<?php include("resources/header.php") ?>
	</header>

	<main class="container">

		<div class="block topBlock">
			<h3>Ogłoszenia lokalne</h3>
			<p>Darmowe oferty pracy, ogłoszenia kupna i sprzedaży nieruchomości, samochodów, artykułów agd i rtv, zwierząt, ubrań...
			Wybierz swój region i przeglądaj 658 169 ogłoszeń.</p> 
		</div>
		
		
		<div class="mainContent">

			<div class=leftColumn>
			<?php include("resources/leftcolumn.php") ?>
			</div>

			<div class="rightColumn">
				<div class="block">
					<h3>Dodaj ogłoszenie</h3>
				</div>

				<div class="block">
					<form action="">
						<label for="#"><h3>Tytuł ogłoszenia:</h3></label>
						<input type="text"><br/>

						<label for=""><h3>Treść ogłoszenia</h3></label>
						<input type="textarea"><br/>
					</form>
					

				</div>

			</div>

			<!-- Logowanie i rejestracja -->
			<div class="loginColum">
				<?php include("resources/logincolumn.php") ?>
			</div>
		</div>

	</main>

	<footer class="containerFooter">
		<?php include("resources/footer.php") ?>
	</footer>
</body>
</html>