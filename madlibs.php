<!DOCTYPE html>
<html>
	<head>
		<title> mad libs </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="madlibs.css">
	</head>
	<body>
		<h1>Mad libs</h1>
		<main>
			<nav>
				<ul>
					<li><a href="#">er heerst paniek...</a></li>
					<li><a href="onkunde.php">onkunde</a></li>
				</ul>
			</nav>
			<?php
			if ($_POST==true) {
			echo "<p>Er heerst paniek in het koningkrijk ".$_POST["land"].". Koning ".$_POST["teacher"]." is ten einde raad en als koning ".$_POST["teacher"]." ten einde raad is, dan roept hij zijn ten-einde-raadsheer ".$_POST["VIP"].".<br>".$_POST["VIP"]."! Het is een ramp! Het is een schande!<br> Sire, Majesteid, Uwe luidruchtigheid, wat is er aan de hand?<br>Mijn ".$_POST["animal"]." is verdwenen! Zo maar, zonder waarschuwing. En ik had net ".$_POST["toys"]." voor hem gekocht!<br> Majesteid, uw ".$_POST["animal"]." komt vast vanzelf weer terug.<br> Ja, da's leuk en aardig, maar hoe moet ik in de tussen tijd ".$_POST["hobby"]." leren? <br> Maar Sire, daar kunt u toch uw ".$_POST["buy"]." voor gebruiken. <br>".$_POST["teacher"]." Je hebt helemaal gelijk! Wat zou ik toch doen als ik jou niet had<br>".$_POST["bored?"].",Sire.</p>";
			} else {
			echo '<form action="madlibs.php" method="post">
				<h3> er heerst paniek... </h3>
				<p> welk dier zou je nooit als huisdier willen hebben? </p><input type="text" name="animal">
				<p> wie is de belangrijkste persoon in je leven? </p><input type="text" name="VIP">
				<p> in welk land zou je graag willen wonen? </p><input type="text" name="land">
				<p> wat doe je als je je verveelt? </p><input type="text" name="bored?">
				<p> met welk speelgoed speelde je als kind het meest? </p><input type="text" name="toys">
				<p> bij welke docent spijbel je het liefst? </p><input type="text" name="teacher">
				<p> als je 100.000€ had, wat zou je dan kopen? </p><input type="text" name="buy">
				<p> wat is je favorite bezigheid? </p><input type="text" name="hobby">
				<input type="submit">
			</form> ';
			}
			?>
			<footer><p> deze website is gemaakt door Rens Gouman </p></footer>
		</main>
	</body>
</html>