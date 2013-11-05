<html>
<head>
<title></title>

<style type="text/css">
<!--
body{
	text-align: center;
	font-family: Arial, Helvetica;
	background-color: black;
	color: white;
}

#title{
	font-family: "Arial Black", sans-serif;
	font-weight: bold;
	font-size: 70px;
	margin-bottom: 30px;
}

#head{
	font-size: 40px;
	margin-bottom: 30px;
}

#sub{
	font-size: 30px;	
}

#bottombar{
	position: absolute;
	bottom: 30px;
	left: 30px;
	right: 30px;
	font-size: 30px;
	text-align: center;
}

#topbar{
	position: absolute;
	top: 30px;
	left: 30px;
	right: 30px;
	font-size: 70px;
	text-align: center;
	font-weight: bold;
}


#answerbar{
	position: absolute;
	top: 200px;
	left: 30px;
	right: 30px;
	font-size: 50px;
	text-align: center;
}

#studentpoints,#profpoints{
	font-weight: bold;
	font-size: 70px;
}
-->
</style>

</head>
<body>


<div id="topbar">
<div style="width: 100%;">

<div style="float: left;">
	<div id="profcur"></div>
</div>


<div style="float: right">
	<div id="studentcur"></div>
</div>

</div>
</div>




<div id="title"></div>
<div id="head"></div>
<div id="sub"></div>


<div id="bottombar">
<div style="width: 100%;">

<div style="float: left;">
	<div id="profpoints"></div>
	<div id="profname">Prof. M&uuml;ller</div>
</div>

<?php
if($_GET['player']){ ?>
<input type="text" id="playerinput" size="50" style="font-size: 24px; text-align: center; display: none;" onKeyUp="setValue('input_<?php echo $_GET['player'] ?>',document.getElementById('playerinput').value);">
	
<?php }else{ ?>
<img src="schlagdenprof_logo_small.png">
<?php } ?>

<div style="float: right">
	<div id="studentpoints"></div>
	<div id="studentname"></div>
</div>

</div>
</div>



<div id="answerbar" style="display: none;">
<div style="width: 100%;">

<div style="float: left;">
	<div id="input_prof"></div>
</div>


<div style="float: right">
	<div id="input_student"></div>
</div>

</div>
</div>




<script type="text/javascript">
<!--
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


cleared = 0;

function updateFields(){
    var req = xmlreq();
    
    req.open("GET","/stura/schlagdenprof/view/data.php",true);
    req.onreadystatechange = function(){            
      	if(req.readyState == 4 && req.status == 200){
			var result = JSON.parse(req.responseText);
			
			document.getElementById("title").innerHTML = result.title;
			document.getElementById("head").innerHTML = result.head;
			document.getElementById("sub").innerHTML = result.sub;
			document.getElementById("studentname").innerHTML = result.studentname;
			document.getElementById("studentpoints").innerHTML = result.studentpoints;
			document.getElementById("profpoints").innerHTML = result.profpoints;
			
			document.getElementById("input_student").innerHTML = result.input_student;
			document.getElementById("input_prof").innerHTML = result.input_prof;

			document.getElementById("profcur").innerHTML = result.profcur;
			document.getElementById("studentcur").innerHTML = result.studentcur;


			//show player input RESULT field if desired
			if(result.answeract == "1"){
				document.getElementById("answerbar").style.display = "block";
			}
			else{
				document.getElementById("answerbar").style.display = "none";
			}



			//show player input field if desired
			if(result.inputact == "1"){
				if(cleared == 0){
					document.getElementById("playerinput").value = "";
					setValue('input_<?php echo $_GET['player'] ?>','');
					cleared = 1;
				}
				document.getElementById("playerinput").style.display = "inline";
				document.getElementById("playerinput").focus();
			}
			else{
				document.getElementById("playerinput").style.display = "none";
				cleared = 0;
			}
			
			
			
      	}
    };
    
    req.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    req.send(null);
    
    
    window.setTimeout("updateFields()", 800);

}

updateFields();




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