<?php
$vars = array("title", "head", "sub", "studentname", "studentpoints", "profpoints", "inputact", "answeract", "input_student", "input_prof","studentcur","profcur");

foreach($vars AS $var){
	$out[$var] = utf8_encode(file_get_contents("data/".$var.".txt"));
}
echo json_encode($out);
?>

