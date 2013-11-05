<?php
$qu = array(
	array(
		"key" => "Studentenzahl",
		"question" => "Wie viele Studenten sind aktuell an unserer Hochschule eingeschrieben?",
		"answer" => "968"
	),	
	array(
		"key" => "Tueren Laborbau",
		"question" => "Wie viele Türen hat der Laborbau (mit Toilettentüren, ohne Fahrstuhl)?",
		"answer" => "151"
	),
	array(
		"key" => "Strassenbaeume in Leipzig",
		"question" => "Wie viele Strassenbaeume sind in Leipzig registriert (mit Stand von 2009)?",
		"answer" => "57732"
	),
	array(
		"key" => "Anzahl Prozessoren Intel",
		"question" => "Wie viele Mikroprozessoren hat Intel herausgebracht?",
		"answer" => "84"
	),
	array(
		"key" => "Weg Haupteingang Westtuer",
		"question" => "Wie lang ist der direkte Weg vom Haupteingang bis zur Westtuer (in m)?",
		"answer" => "79,34 m"
	),
	array(
		"key" => "Muecke Fluegel Frequenz",
		"question" => "Mit welcher Frequenz schlaegt eine Muecke ihre Fluegel (in Hz)?",
		"answer" => "950 Hz"
	),
	array(
		"key" => "Leipziger Stadtgrenze",
		"question" => "Wie lang ist die Leipziger Stadtgrenze (in km)?",
		"answer" => "128,7 km"
	),
	array(
		"key" => "facebook Benutzer Deutschland",
		"question" => "Wie viele aktive Benutzer hat facebook in Deutschland?",
		"answer" => "24,8 Mio."
	),
	array(
		"key" => "Bewohnte Inseln Skandinavien",
		"question" => "Skandinavien hat etwa 150.000 Inseln. Wie viele davon sind bewohnt (in Tausendern)?",
		"answer" => "2000"
	),
	array(
		"key" => "Schweissdruesen auf 1 qcm",
		"question" => "Wie viele Schweissdruesen befinden sich auf einem Quadratzentimeter Haut (in Hundertern)?",
		"answer" => "400"
	),
	array(
		"key" => "Laenge Glasfasernetz Deutschland 2007",
		"question" => "Wie lang war 2007 das Glasfasernetz in Deutschland?",
		"answer" => "340.000 km"
	),
	array(
		"key" => "Mitarbeiter Deutsche Bahn",
		"question" => "Wie viele Mitarbeiter hatte die Deutsche Bahn AG am 31.12.2011?",
		"answer" => "284.319"
	)
);

?>

<hr>
<h1>Sch&auml;tzen (<?php echo ($gamenr++ * 10) ?>)</h1>

<input type="button" value="Set Home Screen" onClick="setHome()">
<input type="button" value="Spiel vorbereiten" onClick="setValue('title','<?php echo htmlentities(htmlentities("Schätzen")); ?>'); setValue('head','<img src=\'nachdenken.jpeg\'>'); setValue('head',''); setValue('sub','');curpointszero();">

<?php
$i = 0;
foreach($qu AS $temp){ ?>
<hr>
<b><?php echo $i ?>) <?php echo $temp['key'] ?></b>

<input type="button" onClick="setValue('head','<?php echo htmlentities(htmlentities($temp['question'])) ?>'); setValue('inputact','1'); setValue('sub',''); setValue('answeract','0')" value="Frage anzeigen">

<?php echo "<input type=\"button\" value=\"Eingabe AUS\" onClick=\"setValue('inputact','0');setValue('answeract','1')\">\n"; ?>

<input type="button" onClick="setValue('sub','<span style=\'font-size: 80px;\'><?php echo htmlentities(htmlentities($temp['answer'])) ?></span>');" value="L&ouml;sung anzeigen">


<?php $i++;
} ?>