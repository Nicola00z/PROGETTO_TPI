<?php
echo"
<link rel='stylesheet' href='./stylesheet/indexstyle.css'>
<script>
function changeFlat0(){
  document.getElementById('mapf0').style.visibility = 'visible';
  document.getElementById('mapf1').style.visibility = 'hidden';
  document.getElementById('mapf2').style.visibility = 'hidden';
  document.getElementById('mapf3').style.visibility = 'hidden';
}
function changeFlat1(){
  document.getElementById('mapf0').style.visibility = 'hidden';
  document.getElementById('mapf1').style.visibility = 'visible';
  document.getElementById('mapf2').style.visibility = 'hidden';
  document.getElementById('mapf3').style.visibility = 'hidden';
}
function changeFlat2(){
  document.getElementById('mapf0').style.visibility = 'hidden';
  document.getElementById('mapf1').style.visibility = 'hidden';
  document.getElementById('mapf2').style.visibility = 'visible';
  document.getElementById('mapf3').style.visibility = 'hidden';
}
function changeFlat3(){
  document.getElementById('mapf0').style.visibility = 'hidden';
  document.getElementById('mapf1').style.visibility = 'hidden';
  document.getElementById('mapf2').style.visibility = 'hidden';
  document.getElementById('mapf3').style.visibility = 'visible';
}
</script>

<div>

<img alt='mappa' src='mappa.jpg' class='map' usemap='#classi' style='float:left' id ='mapf0' value='0'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 175, 165' href='http://www.regione.vda.it/' >
</map><br>

<img alt='mappa' src='grey.jpg' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf1'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 500, 450' href='http://www.youtube.com/' >
</map><br>

<img alt='mappa' src='test.jpg' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf2'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 175, 165' href='http://www.regione.vda.it/' >
</map><br>

<img alt='mappa' src='morata.jpg' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf3'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 175, 165' href='http://www.regione.vda.it/' >

</map><br>

<input class='button flatButton' type='button' value='piano 0' onclick='changeFlat0()'<br>

<input class='button flatButton' type='button' value='piano 1' onclick='changeFlat1()'><br>

<input class='button flatButton' type='button' value='piano 2' onclick='changeFlat2()'><br>

<input class='button flatButton' type='button' value='piano 3' onclick='changeFlat3()'><br>

"
?>