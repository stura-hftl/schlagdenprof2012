<hr>
<h1>Augen zaehlen (<?php echo ($gamenr++ * 10) ?>)</h1>

<input type="button" value="Set Home Screen" onClick="setHome()">
<input type="button" value="Spiel vorbereiten" onClick="setValue('title','Augen zaehlen'); setValue('head','<img src=\'Wuerfel.jpeg\'>'); setValue('sub',''); curpointszero();"><br>
<br>


<input type="button" value="Student +" onClick="document.getElementById('studentcur').value = parseInt(document.getElementById('studentcur').value,10) + 1; setValue('studentcur', document.getElementById('studentcur').value); ">


<input type="button" value="Prof +" onClick="document.getElementById('profcur').value = parseInt(document.getElementById('profcur').value,10) + 1; setValue('profcur', document.getElementById('profcur').value); ">

<b>Buzzer zur&uuml;cksetzen!</b>