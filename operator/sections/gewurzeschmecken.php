<hr>
<h1>Gew&uuml;rze schmecken (<?php echo ($gamenr++ * 10) ?>)</h1>

<input type="button" value="Set Home Screen" onClick="setHome()">
<input type="button" value="Spiel vorbereiten" onClick="setValue('title','Schmecken'); setValue('head','<img src=\'schmecken.png\'>'); setValue('sub',''); curpointszero();">

<?php
$gew = array("Zimt","Datteln","Mettwurst","Anis","Banane","Kapern","Zahnpasta","Creme Fraiche","Nelken","Curry","ORANGE","Brathering","Mozzarella","Ingwer","Babybrei","Marzipankartoffel","GRUEN","WEISS");

$i = 0;
foreach($gew AS $temp){ ?>
<hr>
<b><?php echo $i ?>) <?php echo htmlentities($temp) ?></b>

<input type="button" onClick="setValue('head','<span style=\'font-weight:bold; font-size: 300px; color: #777;\'>?</span>');" value="Clear">
<?php echo $enableinput ?>
<?php echo "<input type=\"button\" value=\"Eingabe AUS\" onClick=\"setValue('inputact','0');setValue('answeract','1')\">\n"; ?>

<input type="button" onClick="setValue('head','<span style=\'font-size: 150px;\'><?php echo htmlentities(htmlentities($temp)) ?></span>');" value="L&ouml;sung anzeigen">


<?php $i++;
} ?>