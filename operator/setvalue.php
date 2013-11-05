<?php
$file = "../view/data/".$_GET['field'].".txt";
if(!is_file($file)) exit;

$fp = fopen($file, "w");
fwrite($fp, stripslashes($_GET['value']));
fclose($fp);

?>