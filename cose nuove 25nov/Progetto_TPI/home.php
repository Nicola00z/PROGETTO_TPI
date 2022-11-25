<?php
echo"
<link rel='stylesheet' href='./stylesheet/indexstyle.css'>
<script>
var piano = 0;
function changeFlat0(){
  piano = 0;

  for (let i = 0; i <= 3; i++) {
    if(i==piano){
      document.getElementById('mapf' + piano).style.visibility = 'visible';
      for(let h = 0; h < 99; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'visible';
        }
      }
      for(let h = 100; h < 199; h++){
        if(document.getElementById('A' + h) == null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 200; h < 299; h++){
        if(document.getElementById('A' + h) == null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 300; h < 399; h++){
        if(document.getElementById('A' + h) == null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
    
    }else{
      document.getElementById('mapf' + i).style.visibility = 'hidden';
      } 
  }
}
function changeFlat1(){
  piano = 1;

  for (let i = 0; i <= 3; i++) {
    if(i==piano){
      document.getElementById('mapf' + piano).style.visibility = 'visible';
      for(let h = 0; h < 99; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 100; h < 199; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'visible';
        }
      }
      for(let h = 200; h < 299; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 300; h < 399; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
    
    }else{
      document.getElementById('mapf' + i).style.visibility = 'hidden';
      } 
  }
}
function changeFlat2(){
  piano = 2;

  for (let i = 0; i <= 3; i++) {
    if(i==piano){
      document.getElementById('mapf' + piano).style.visibility = 'visible';
      for(let h = 0; h < 99; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 100; h < 199; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 200; h < 299; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'visible';
        }
      }
      for(let h = 300; h < 399; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
    
    }else{
      document.getElementById('mapf' + i).style.visibility = 'hidden';
      } 
  }
}
function changeFlat3(){
  piano = 3;

  for (let i = 0; i <= 3; i++) {
    if(i==piano){
      document.getElementById('mapf' + piano).style.visibility = 'visible';
      for(let h = 0; h < 99; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 100; h < 199; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 200; h < 299; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'hidden';
        }
      }
      for(let h = 300; h < 399; h++){
        if(document.getElementById('A' + h)==null){
        }else{
          document.getElementById('A' + h).style.visibility = 'visible';
        }
      }
    
    }else{
      document.getElementById('mapf' + i).style.visibility = 'hidden';
      } 
  }
}
</script>

<div>
<a id='A006' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:100px; left:100px; background-color:red; visibility:visible' ><p> A006 </p></a>
<img alt='mappa' src='./src/mappa.jpg' class='map' usemap='#classi' style='float:left; visibility: visible' id ='mapf0' value='0'>
<map name='classi' id='classi'>
</map><br>

<a id='A106' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:100px; left:100px; background-color:red; visibility:hidden' ><p> A106 </p></a>
<img alt='mappa' src='./src/grey.jpg' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf1' value='0'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 500, 450' href='http://www.youtube.com/' >
</map><br>

<a id='A206' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:100px; left:100px; background-color:red; visibility:hidden' ><p> A206 </p></a>
<img alt='mappa' src='./src/test.jpg' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf2'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 175, 165' href='http://www.regione.vda.it/' >
</map><br>

<a id='A306' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:100px; left:100px; background-color:red; visibility:hidden' ><p> A306 </p></a>
<img alt='mappa' src='./src/test.jpg' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf3'>
<map name='classi' id='classi'>
<area shape='rect' coords='30, 30, 175, 165' href='http://www.regione.vda.it/' >
</map><br>

<input class='button flatButton' type='button' value='piano 0' onclick='changeFlat0()'><br>

<input class='button flatButton' type='button' value='piano 1' onclick='changeFlat1()'><br>

<input class='button flatButton' type='button' value='piano 2' onclick='changeFlat2()'><br>

<input class='button flatButton' type='button' value='piano 3' onclick='changeFlat3()'><br>

"
?>
