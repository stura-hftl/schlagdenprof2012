<hr>
<h1>Musik r&uuml;ckw&auml;rts (<?php echo ($gamenr++ * 10) ?>)</h1>

<input type="button" value="Set Home Screen" onClick="setHome()">
<input type="button" value="Spiel vorbereiten" onClick="setValue('title','Musik rueckwaerts'); setValue('head','<img src=\'Schulfach_Musik.jpeg\'>'); setValue('sub',''); curpointszero();">

<?php
$songs = array(
	array(
		"name" => "99 Luftballons",
		"src" => "0Nena - 99 Luftballons1.mp3",
		"srcinv" => "0Nena - 99 Luftballons_invert1.mp3"
	),
	array(
		"name" => "Smoke On The Water",
		"src" => "1Deep Purple - Smoke On The Water1.mp3",
		"srcinv" => "1Deep Purple - Smoke On The Water_invert1.mp3"
	),
	array(
		"name" => "Satellite",
		"src" => "2Lena_Meyer-Landrut_-_Satellite.mp3",
		"srcinv" => "2Lena_Meyer-Landrut_-_Satellite_invert.mp3"
	),
	array(
		"name" => "Sweet Home Alabama",
		"src" => "3Lynard Skynard - Sweet Home Alabama1.mp3",
		"srcinv" => "3Lynard Skynard - Sweet Home Alabama_invert1.mp3"
	),
	array(
		"name" => "Call Me Maybe",
		"src" => "Carly Rae Jepsen - Call Me Maybe.mp3",
		"srcinv" => "Carly Rae Jepsen - Call Me Maybe_invert.mp3"
	),
	array(
		"name" => "Last Christmas",
		"src" => "5Wham - Last Christmas.mp3",
		"srcinv" => "5Wham - Last Christmas_invert.mp3"
	),
	array(
		"name" => "Life Is Life",
		"src" => "6Opus - Live Is Life.mp3",
		"srcinv" => "6Opus - Live Is Life_invert.mp3"
	),
	array(
		"name" => "Somebody That I Used To Know",
		"src" => "Gotye - Somebody That Used To Know.mp3",
		"srcinv" => "Gotye - Somebody That Used To Know_invert.mp3"
	),
	array(
		"name" => "Haus am See",
		"src" => "Haus am See.mp3",
		"srcinv" => "Haus am See_invert.mp3"
	),	
	array(
		"name" => "Flat Beat",
		"src" => "7Mr Oizo - Flat Beat.mp3",
		"srcinv" => "7Mr Oizo - Flat Beat_invert.mp3"
	),
	array(
		"name" => "Stairway To Heaven",
		"src" => "8Led Zeppelin - Stairway to Heaven1.mp3",
		"srcinv" => "8Led Zeppelin - Stairway to Heaven_invert1.mp3"
	),
	array(
		"name" => "Eye Of The Tiger",
		"src" => "9Survivor - Eye Of The Tiger.mp3",
		"srcinv" => "9Survivor - Eye Of The Tiger_invert.mp3"
	),
	array(
		"name" => "Boomerang",
		"src" => "10Bluemchen - Boomerang1.mp3",
		"srcinv" => "10Bluemchen - Boomerang_invert1.mp3"
	),
	array(
		"name" => "Beat It",
		"src" => "12Michael Jackson - Beat it.mp3",
		"srcinv" => "12Michael Jackson - Beat it_invert.mp3"
	),
	array(
		"name" => "YMCA",
		"src" => "14YMCA.mp3",
		"srcinv" => "14YMCA_invert.mp3"
	)
);
	

$i = 0;
foreach($songs AS $temp){ ?>
<hr>
<b><?php echo $i ?>) <?php echo htmlentities($temp['name']) ?></b><br>
<audio src="../view/data/Musik_rueckwaerts/<?php echo $temp['srcinv'] ?>" controls type="audio/mpeg"></audio> <b>(INV)</b><br>
<audio src="../view/data/Musik_rueckwaerts/<?php echo $temp['src'] ?>" controls type="audio/mpeg"></audio> <b>(ORIG)</b><br>

<input type="button" onClick="setValue('head','<span style=\'font-size: 100px;\'><?php echo htmlentities(htmlentities($temp['name'])) ?></span>');" value="L&ouml;sung anzeigen">
<input type="button" onClick="setValue('head','<span style=\'font-weight:bold; font-size: 300px; color: #777;\'>?</span>');" value="Clear">

<b>Buzzer zur&uuml;cksetzen!</b>


<?php $i++;
} ?>