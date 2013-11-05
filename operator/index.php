<?php
$enableinput = "<input type=\"button\" value=\"Eingabe AN\" onClick=\"setValue('inputact','1')\">\n";
$disableinput = "<input type=\"button\" value=\"Eingabe AUS\" onClick=\"setValue('inputact','0')\">\n";
$showresults = "<input type=\"button\" value=\"Eingabe zeigen\" onClick=\"setValue('answeract','1')\">\n";

$gamenr = 1;

?>
<!DOCTYPE html>
<html>
<head>
<title></title>

<style type="text/css">
<!--
body{
	font-family: Arial, Helvetica;
}

div#points{
	position: fixed;
	right: 0;
	top: 0;
	background-color: #ddd;
	padding: 10px;
	border-left: 1px solid black;
	border-bottom: 1px solid black;
}

-->
</style>

</head>
<body>

<div id="points">
<form onSubmit="setValue('profpoints', document.getElementById('profpoints').value); setValue('studentpoints', document.getElementById('studentpoints').value); return false;">
<b>Globale Punkte:</b><br>
Prof:<br>
<input type="text" size="10" id="profpoints"><br>
Student:<br>
<input type="text" size="10" id="studentpoints"><br>
<input type="submit" value="Set points">
</form>

<form onSubmit="curformsubmit(); return false;">
<b>Rundenpunkte:</b><br>
Prof:<br>
<input type="text" size="10" id="profcur">
<a href="javascript:;" onClick="document.getElementById('profcur').value = parseInt(document.getElementById('profcur').value,10) + 1; setValue('profcur', document.getElementById('profcur').value); ">+</a>
<br>
Student:<br>
<input type="text" size="10" id="studentcur">
<a href="javascript:;" onClick="document.getElementById('studentcur').value = parseInt(document.getElementById('studentcur').value,10) + 1; setValue('studentcur', document.getElementById('studentcur').value); ">+</a>
<br>
<input type="submit" value="Set points"><br>
<input type="button" value="0 (Null)" onClick="curpointszero()"><br>
<input type="button" value="Clear" onClick="curpointsclear()"><br>
</form>


</div>

<h1>Start</h1>
Name Student: <input type="text" id="studentname" size="40"><input type="button" value="Name setzen" onClick="setValue('studentname',document.getElementById('studentname').value)">


<?php require("sections/augenzaehlen.php"); ?>
<?php require("sections/liegestuetze.php"); ?>
<?php require("sections/gewurzeschmecken.php"); ?>
<?php require("sections/icschnippen.php"); ?>
<?php require("sections/musikrueckwaerts.php"); ?>
<?php require("sections/schaetzen.php"); ?>
<?php require("sections/weristdas.php"); ?>

<br>
<br>
<br>



<!-- ############################################################ -->



<script type="text/javascript">
<!--


function curformsubmit(){
	setValue('profcur', document.getElementById('profcur').value);
	setValue('studentcur', document.getElementById('studentcur').value);
}

function curpointsclear(){
	document.getElementById('profcur').value = '';
	document.getElementById('studentcur').value = '';
	curformsubmit();
}

function curpointszero(){
	document.getElementById('profcur').value = '0';
	document.getElementById('studentcur').value = '0';
	curformsubmit();
}



function xmlreq(){
	req = null;
    
    try{
        req = new XMLHttpRequest();
    }
    catch(e){
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } 
        catch(e){
            try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } 
            catch(failed){
                req = null;
            }
        }  
    }
    return req;
}



function setHome(){
	setValue('title','');
	setValue('head','<img src=\'schlagdenprof_logo_ohnetransp.png\'>');
	setValue('sub','');
	setValue('inputact','0');
	setValue('answeract','0');
	curpointsclear();
}



function setValue(target,value){
    var req = xmlreq();
    

	req.open("GET","/stura/schlagdenprof/operator/setvalue.php?field=" + target + "&value=" + escape(value),true);
    req.onreadystatechange = function(){            
      	if(req.readyState == 4 && req.status == 200){
			
			
      	}
    };
    
    req.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    req.send(null);

}

-->
</script>


</body>
</html>