<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="indexstyle.css" /> 
  <title>TPI project</title>
</head>

<script>
function pictureChange()
{
  if(document.getElementById("mappa")=="grey.jpg"){
    document.getElementById("mappa").src="mappa.jpg";
  }else{
    document.getElementById("mappa").src="grey.jpg";
  }
}
</script>

<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="elencoOG.php">Oggetti smarriti</a></li>
  <li><a href="#contact">Contatti</a></li>
  <li style="float:right"><a href="#about">About</a></li>
</ul>

<div>
<img alt="mappa" src="mappa.jpg" class="map" usemap="#classi" style="float:left" id ="mappa">
<map name="classi" id="classi">
	<area shape="rect" coords="30, 30, 175, 165" href="http://www.regione.vda.it/" >
</map><br>

<input class="button pianiButton" type="button" value="piano 0" onclick="pictureChange()"><br>
<input class="button pianiButton" type="button" value="piano 1" onclick="pictureChange()"><br>
<input class="button pianiButton" type="button" value="piano 2"><br>
<input class="button pianiButton" type="button" value="piano 3"><br>
</div>

<?php

?>

</body>
</html>
