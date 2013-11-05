<h1>Wer ist das? (<?php echo ($gamenr++ * 10) ?>)</h1>
<input type="button" value="Set Home Screen" onClick="setHome()">
<input type="button" value="Spiel vorbereiten" onClick="setValue('title','Wer ist das?'); setValue('head','<img src=\'man_wearing_hat_silhouette.png\'>'); setValue('sub','');curpointszero();">



<?php
$wid = array(
	array(
		"name" => "Helmut Schmidt",
		"src"  => "0Helmut_Schmidt.jpeg"
	),
	array(
		"name" => "Philipp Lahm",
		"src"  => "1Philipp_Lahm.jpeg"
	),
	array(
		"name" => "Madonna",
		"src"  => "2Madonna.jpeg"
	),
	array(
		"name" => "Linus Torvalds",
		"src"  => "3Linus_Torvalds.jpeg"
	),
	array(
		"name" => "Til Schweiger",
		"src"  => "4Til_Schweiger.jpeg"
	),
	array(
		"name" => "David Hasselhoff",
		"src"  => "5David_Hasselhoff.jpeg"
	),
	array(
		"name" => "Uri Geller",
		"src"  => "6Uri_Geller.jpeg"
	),
	array(
		"name" => "Charlie Sheen",
		"src"  => "7Charlie_Sheen.jpeg"
	),
	array(
		"name" => "Thomas de Maiziere",
		"src"  => "8Thomas_de_Maiziere.jpeg"
	),
	array(
		"name" => "Britney Spears",
		"src"  => "9Britney_Spears.jpeg"
	),
	array(
		"name" => "Charlotte Roche",
		"src"  => "10Charlotte_Roche.jpeg"
	),
	array(
		"name" => "Bill Clinton",
		"src"  => "11Bill_Clinton.jpeg"
	),
	array(
		"name" => "Bushido (Anis Mohamed Youssef Ferchichi)",
		"src"  => "12Bushido_anis_mohamed_youssef_ferchichi.jpeg"
	),
	array(
		"name" => "Grace Hopper",
		"src"  => "13Grace_Hopper.jpeg"
	),
	array(
		"name" => "Daniela Katzenberger",
		"src"  => "14Daniela_Katzenberger.jpeg"
	),
	array(
		"name" => "Casper (Benjamin Griffey)",
		"src"  => "15Casper.jpeg"
	),
	array(
		"name" => "Joko und Klaas",
		"src"  => "16Joko_und_Klaas.jpeg"
	),
	array(
		"name" => "Kristina Schröder",
		"src"  => "17Kristina_Schroeder.jpg"
	),
	array(
		"name" => "Gina-Lisa",
		"src"  => "18Gina-Lisa.jpeg"
	),
	array(
		"name" => "Christian von Boetticher",
		"src"  => "19Christian_von_Boetticher.jpeg"
	),
	array(
		"name" => "Ulrich Lehner",
		"src"  => "20Ulrich_Lehner.jpeg"
	)
);


$i = 0;
foreach($wid AS $img){ ?>
<hr>
<b><?php echo $i ?>) <?php echo $img['name'] ?></b>
<input type="button" onClick="setValue('head','<img src=\'data/Wer_ist_das/<?php echo $img['src'] ?>\'>'); setValue('sub','');" value="Bild anzeigen">

<input type="button" onClick="setValue('sub','<?php echo htmlentities(htmlentities($img['name'])) ?>');" value="L&ouml;sung anzeigen">

<b>Buzzer zur&uuml;cksetzen!</b>

<?php $i++;
} ?>

