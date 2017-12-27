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
					<h3>Ostatnio dodane ogłoszenia</h3>
				</div>

				<div class="adsBlock buy">
					<h2>Lorem ipsum dolor sit amet</h2>
					<h4>Dodano: 20.12.2017</h4>
					<h4>Dodał: Michał</h4>
					<h4>Wrocław</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra est imperdiet magna eleifend, ut auctor nibh suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec...</p>
					<input type="submit" class="more Buy" value="Dowiedz się więcej">
				</div>

				<div class="adsBlock sell">
					<h2>Lorem ipsum dolor sit amet</h2>
					<h4>Dodano: 20.12.2017</h4>
					<h4>Dodał: Michał</h4>
					<h4>Wrocław</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra est imperdiet magna eleifend, ut auctor nibh suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec...</p>
					<input type="submit" class="more Sell" value="Dowiedz się więcej">
				</div>

				<div class="adsBlock exchange">
					<h2>Lorem ipsum dolor sit amet</h2>
					<h4>Dodano: 20.12.2017</h4>
					<h4>Dodał: Michał</h4>
					<h4>Wrocław</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra est imperdiet magna eleifend, ut auctor nibh suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec...</p>
					<input type="submit" class="more Exchange" value="Dowiedz się więcej">
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