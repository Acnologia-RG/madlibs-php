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
					<li><a href="madlibs.php">er heerst paniek...</a></li>
					<li><a href="#">onkunde</a></li>
				</ul>
			</nav>
			<?php
			if ($_POST==true) {
			echo "<p>Er zijn veel mensen die niet kunnen ".$_POST["skill"].". Neem nou ".$_POST["persoon"].". Zelfs met de hulp van een ".$_POST["vacantie"]." of zelfs ".$_POST["number"]." kan ".$_POST["persoon"]." niet ".$_POST["skill"].". Dat heeft niet te maken met een gebrek aan ".$_POST["best"].", maar met een te veel aan ".$_POST["worst"].". Te veel ".$_POST["worst"]." leidt tot ".$_POST["worst-thing"]." en dat is niet goed als je wilt ".$_POST["skill"].". Helaas voor ".$_POST["persoon"].".</p>";
			}else{
			echo '<form action="onkunde.php" method="post">
				<h3> onkunde </h3>
				<p> wat zou je graag willen kunnen? </p><input type="text" name="skill">
				<p> met welk persoon kun je goed opschieten? </p><input type="text" name="persoon">
				<p> wat is je favoriete getal? </p><input type="number" name="number">
				<p> wat heb je altijd bij je als je op vacantie gaat? </p><input type="text" name="vacantie">
				<p> wat is je beste persoonlijke eigenshap? </p><input type="text" name="best">
				<p> wat is je slechtste persoonlijke eigenshap? </p><input type="text" name="worst">
				<p> wat is het ergste dat je kan overkomen? </p><input type="text" name="worst-thing">
				<input type="submit">
			</form> ';
			}
			?>
			<footer><p> deze website is gemaakt door Rens Gouman </p></footer>
		</main>
	</body>
</html>