<?php


require("./config.php");


echo"
<link rel='stylesheet' href='./stylesheet/indexstyle.css'>
<script>


var data = new Date();
var min = data.getMinutes();
var sec = data.getSeconds();
var day = data.getDay();

window.onload = function(){classCtrl()}; 

// quando i minuti sono 0 e si riavvia la pagina cambiano le immagini, forse!!
// problema: se si riavvia quando i minuti sono 1 le immagini non cambiano
// servirebbe un reload automatico della pagina quando i minuti sono uguale a 0
// non so se window.location.reload(true) funzioni

function classCtrl() {
  if(min==0){
    window.location.reload(true)
    for(let t = 0; t < 399; t++){
      if(document.getElementById('I' + t)==null){
      }else{
        for(let _ = 1; _ < 9; _++){
          if(lez + _ != ' '){
            document.getElementById('I' + t).src= './src/occupata.png';
          }else{
          } document.getElementById('I' + t).src= './src/libera.png';
        }
      }
    }
  }
}

var piano = 0;

// funzioni per il cambio di piano

function changeVar0(){piano = 0}
function changeVar1(){piano = 1}
function changeVar2(){piano = 2}
function changeVar3(){piano = 3}

function changeFlat(){

  document.getElementById('mapf' + piano).style.visibility = 'visible';
  for(let i = 0; i < 4; i++){if(i != piano){document.getElementById('mapf' + i).style.visibility = 'hidden';}}

  if(piano == 0){
    for(let h = 0; h < 399; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'hidden'}
      }else{document.getElementById('A' + h).style.visibility = 'hidden'}
    }
    for(let h = 0; h < 99; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'visible'}
      }else{document.getElementById('A' + h).style.visibility = 'visible'}
    }

  }else if(piano == 1){
    for(let h = 0; h < 399; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'hidden'}
      }else{document.getElementById('A' + h).style.visibility = 'hidden'}
    }
    for(let h = 100; h < 199; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'visible'}
      }else{document.getElementById('A' + h).style.visibility = 'visible'}
    }

  }else if(piano == 2){
    for(let h = 0; h < 399; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'hidden'}
      }else{document.getElementById('A' + h).style.visibility = 'hidden'}
    }
    for(let h = 200; h < 299; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'visible'}
      }else{document.getElementById('A' + h).style.visibility = 'visible'}
    }

  }else if(piano == 3){
    for(let h = 0; h < 399; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'hidden'}
      }else{document.getElementById('A' + h).style.visibility = 'hidden'}
    }
    for(let h = 300; h < 399; h++){
      if(document.getElementById('A' + h)==null){
        if(document.getElementById('L' + h)==null){
        }else{document.getElementById('L' + h).style.visibility = 'visible'}
      }else{document.getElementById('A' + h).style.visibility = 'visible'}
    }
    }
}
</script>

<!-- aule e background -->

<div>
<a id='A64' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:134px; left:264px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-7px;left:1px'> A064 </p><img id='I64' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:39px'/></a>
<a id='A63' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:134px; left:304px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-7px;left:1px'> A063 </p><img id='I63' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:40px'/></a>
<a id='A62' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:134px; left:345px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-7px;left:1px'> A062 </p><img id='I62' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:40px'/></a>
<a id='A61' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:134px; left:386px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-7px;left:1px'> A061 </p><img id='I61' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:39px'/></a>
<a id='A53' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:125px; left:445px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:60px;left:15px'> PALESTRA 053 </p><img id='I53' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:188px; width:100px'/></a>
<a id='L43' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:288px; left:630px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:3px'> L043 </p><img id='I43' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:65px; width:33px'/></a>
<a id='L45' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:288px; left:664px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:3px;left:13px'> L045 </p><img id='I45' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:65px; width:58px'/></a>
<a id='L42' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:388px; left:570px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:3px;left:4px'> L042 </p><img id='I42' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:63px; width:41px'/></a>
<a id='L98' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:388px; left:612px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:3px;left:4px'> </p><img id='I44' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:64px; width:19px'/></a>
<a id='L44' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:401px; left:612px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-3px;left:7px'> L044 </p><img id='I44' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:51px; width:49px'/></a>
<a id='L46' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:388px; left:662px; visibility:visible;'><font size='1'> <p style='color:black;text-align:center; z-index:3; position:absolute;top:10px;left:5px'> L046 </p></font><img id='I46' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:64px; width:28px'/></a>
<a id='L48' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:388px; left:692px; visibility:visible;'><font size='1'><p style='color:black;text-align:center; z-index:3; position:absolute;top:10px;left:5px'> L048 </p></font><img id='I48' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:64px; width:29px'/></a>
<a id='L72' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:307px; left:260px; visibility:visible;'><font size='2'><p style='color:black;text-align:center; z-index:3; position:absolute;top:30px;left:3px'> PALESTRA 072 </p></font><img id='I72' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:128px; width:65px'/></a>
<a id='L15' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:427px; left:352px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-2px;left:20px'> L015 </p><img id='I15' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:46px; width:75px'/></a>
<a id='L19' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:427px; left:467px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-2px;left:20px'> L019 </p><img id='I19' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:46px; width:77px'/></a>
<a id='A9' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:493px; left:122px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-6px'> A009 </p><img id='I9' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:36px'/></a>
<a id='A7' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:493px; left:161px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-6px'> A007 </p><img id='I7' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:36px'/></a>
<a id='A5' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:493px; left:200px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-6px'> A005 </p><img id='I5' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:40px; width:36px'/></a>
<a id='A10' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:564px; left:122px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-6px'> A010 </p><img id='I10' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:38px; width:37px'/></a>
<a id='A8' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:549px; left:160px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-3px'> A008 </p><img id='I6' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:53px; width:38px'/></a>
<a id='A6' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:549px; left:199px; visibility:visible;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:-3px'> A006 </p><img id='I8' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:53px; width:38px'/></a>
<img alt='mappa' src='./src/flat0.png' class='map' usemap='#classi' style='float:left; visibility: visible' id ='mapf0'>


<a id='A106' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:484px; left:186px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A106 </p><img id='I106' alt='aula' src='./src/libera.png'style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A108' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:484px; left:139px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A108 </p><img id='I108' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A110' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:484px; left:92px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A110 </p><img id='I110' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A107' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:404px; left:139px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A107 </p><img id='I107' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A109' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:404px; left:92px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A109 </p><img id='I109' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A105' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:404px; left:186px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A105 </p><img id='I105' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A118' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:404px; left:465px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A118 </p><img id='I118' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A120' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:404px; left:511px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A120 </p><img id='I120' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:46px'/></a>
<a id='A122' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:404px; left:558px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A122 </p><img id='I122' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A123' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:323px; left:559px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A123 </p><img id='I123' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='A121' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:323px; left:512px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A121 </p><img id='I121' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:56px; width:45px'/></a>
<a id='L142' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:634px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:18px'> L142 </p><img id='I142' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:74px'/></a>
<a id='L146' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:749px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:18px'> L146 </p><img id='I146' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:70px'/></a>
<a id='L141' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:634px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:12px'> L141 </p><img id='I141' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:59px'/></a>
<a id='L143' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:695px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:12px'> L143 </p><img id='I143' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:63px'/></a>
<a id='L145' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:760px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:10px;left:12px'> L145 </p><img id='I145' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:59px'/></a>
<a id='A164' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:376px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A164 </p><img id='I164' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:47px'/></a>
<a id='A163' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:424px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A163 </p><img id='I163' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:47px'/></a>
<a id='A162' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:472px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A162 </p><img id='I162' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:49px'/></a>
<a id='A161' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:522px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A161 </p><img id='I161' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:48px'/></a>
<img alt='mappa' src='./src/flat1.png' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf1'>

<a id='A204' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:566px; left:297px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> L204 </p><img id='204' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:60px; width:41px'/></a>
<a id='L202' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:494px; left:306px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px'> L202 </p><img id='I202' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:70px; width:33px'/></a>
<a id='A296' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:566px; left:258px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px'> </p><img id='I296' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:60px; width:38px'/></a>
<a id='A206' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:557px; left:258px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px'> A206 </p><img id='I206' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:60px; width:30px'/></a>
<a id='A208' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:498px; left:186px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A208 </p><img id='I208' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A210' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:498px; left:139px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A210 </p><img id='I210' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A212' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:498px; left:92px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A212 </p><img id='I212' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A207' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:391px; left:139px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A207 </p><img id='I207' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A209' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:391px; left:92px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A209 </p><img id='I209' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A205' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:391px; left:186px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A205 </p><img id='I205' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A203' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:391px; left:258px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:2px'> A203 </p><img id='I203' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:40px'/></a>
<a id='A201' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:391px; left:300px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:2px'> A201 </p><img id='I204' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:40px'/></a>
<a id='A214' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:418px; left:366px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A214 </p><img id='I214' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:55px; width:48px'/></a>
<a id='A216' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:418px; left:416px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A216 </p><img id='I216' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:55px; width:46px'/></a>
<a id='A218' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:418px; left:464px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A218 </p><img id='I218' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:55px; width:46px'/></a>
<a id='A220' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:418px; left:511px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A220 </p><img id='I220' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:55px; width:46px'/></a>
<a id='A222' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:418px; left:558px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A222 </p><img id='I222' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:55px; width:46px'/></a>
<a id='A223' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:313px; left:559px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A223 </p><img id='I223' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A221' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:313px; left:512px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A221 </p><img id='I221' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A219' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:313px; left:464px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A219 </p><img id='I219' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A217' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:313px; left:417px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A217 </p><img id='I217' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A215' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:313px; left:370px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A215 </p><img id='I215' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='L242' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:634px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:20px'> L242 </p><img id='I242' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:73px'/></a>
<a id='L244' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:708px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:17px'> L244 </p><img id='I244' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:64px'/></a>
<a id='L243' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:636px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:20px'> L243 </p><img id='I243' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:71px'/></a>
<a id='L245' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:708px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:10px'> L245 </p><img id='I245' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:36px'/></a>
<a id='L247' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:746px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:10px;left:20px'> L247 </p><img id='I247' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:73px'/></a>
<a id='L246' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:774px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:7px'> L246 </p><img id='I246' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:46px'/></a>
<a id='A264' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:370px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A264 </p><img id='I264' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:47px'/></a>
<a id='A263' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:418px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A263 </p><img id='I263' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:47px'/></a>
<a id='A262' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:466px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A262 </p><img id='I262' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:49px'/></a>
<a id='A261' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:157px; left:516px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;left:5px'> A261 </p><img id='I261' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:48px; width:48px'/></a>
<img alt='mappa' src='./src/flat2.png' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf2'>


<a id='A308' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:510px; left:186px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A308 </p><img id='I308' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A310' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:510px; left:139px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A310 </p><img id='I310' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A312' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:510px; left:92px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A312 </p><img id='I312' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A307' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:378px; left:139px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A307 </p><img id='I307' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A309' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:378px; left:92px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A309 </p><img id='I309' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A305' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:378px; left:186px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A305 </p><img id='I305' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:45px'/></a>
<a id='A303' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:378px; left:258px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:2px'> A303 </p><img id='I303' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:40px'/></a>
<a id='A301' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:378px; left:300px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:2px'> A301 </p><img id='I301' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:40px'/></a>
<a id='A314' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:430px; left:366px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A314 </p><img id='I314' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:48px'/></a>
<a id='A316' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:430px; left:416px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A316 </p><img id='I316' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:46px'/></a>
<a id='A318' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:430px; left:464px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A318 </p><img id='I318' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:46px'/></a>
<a id='A320' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:430px; left:511px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A320 </p><img id='I320' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:46px'/></a>
<a id='A322' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:430px; left:558px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A322 </p><img id='I322' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:54px; width:46px'/></a>
<a id='A323' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:300px; left:559px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A323 </p><img id='I323' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A321' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:300px; left:512px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A321 </p><img id='I321' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A319' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:300px; left:464px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A319 </p><img id='I319' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A317' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:300px; left:417px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A317 </p><img id='I317' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='A315' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:300px; left:370px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:2px;left:5px'> A315 </p><img id='I315' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:52px; width:45px'/></a>
<a id='L342' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:634px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:20px'> L342 </p><img id='I342' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:75px'/></a>
<a id='L343' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:636px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:20px'> L343 </p><img id='I343' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:71px'/></a>
<a id='L345' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:709px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:10px'> L345 </p><img id='I345' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:36px'/></a>
<a id='L347' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:156px; left:746px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:10px;left:20px'> L347 </p><img id='I347' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:79px; width:73px'/></a>
<a id='L346' class='aula' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php' style='position:absolute; z-index:2; top:276px; left:748px; visibility:hidden;'><p style='color:black;text-align:center; z-index:3; position:absolute;top:12px;left:7px'> L346 </p><img id='L346' alt='aula' src='./src/libera.png' style='z-index:2; position:absolute; height:78px; width:72px'/></a>
<img alt='mappa' src='./src/flat3.png' class='map' usemap='#classi' style='float:left; visibility:hidden' id ='mapf3'>

<!-- aule e background -->

<input class='button flatButton' type='button' value='piano 0' id='piano0' onclick='changeVar0(); changeFlat(); changeClassStatus(0);'><br>

<input class='button flatButton' type='button' value='piano 1' id='piano1' onclick='changeVar1(); changeFlat(); changeClassStatus(1);'><br>

<input class='button flatButton' type='button' value='piano 2' id='piano2' onclick='changeVar2(); changeFlat(); changeClassStatus(2);'><br>

<input class='button flatButton' type='button' value='piano 3' id='piano3' onclick='changeVar3(); changeFlat(); changeClassStatus(3);'><br>

"
?>