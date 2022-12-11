
let giorni = new Map();
giorni.set(0, "lunedi");
giorni.set(1, "martedi");
giorni.set(2, "mercoledi");
giorni.set(3, "giovedi");
giorni.set(4, "venerdi");
function changeDay(day, aula){
    document.getElementById("title").innerHTML = giorni.get(day);
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        let response = this.responseText.split(",");
        console.log(response);
        document.getElementById("1Ora").innerHTML = response[0];
        document.getElementById("2Ora").innerHTML = response[1];
        document.getElementById("3Ora").innerHTML = response[2];
        document.getElementById("4Ora").innerHTML = response[3];
        document.getElementById("5Ora").innerHTML = response[4];
        document.getElementById("6Ora").innerHTML = response[5];
        document.getElementById("7Ora").innerHTML = response[6];
        document.getElementById("8Ora").innerHTML = response[7];
      }
    xmlhttp.open("GET", "getschedule.php?q=" + day + "&aula=" + aula);
    console.log("getschedule.php?q=" + day + "&aula="+aula);
    xmlhttp.send();
}

function setValues(){
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  let Aula = urlParams.get("Aula");
  let Ora = urlParams.get("ora");
  if(Aula !== null && Ora !== null){
    document.getElementById('ora').value=Ora;
    document.getElementById('Aula').value=Aula;
    console.log(Ora + "° Ora");
  }
  let currentDate = new Date().toJSON().slice(0, 10);
  document.getElementById('Data').value = currentDate;
  let Error = urlParams.get("e");

  if(Error == 2){
    $( "span" ).text( "Aula occupata" ).show().fadeOut( 5000 );
  }

  
}

function checkDate(e){
  //let day = getDay(document.getElementById('Date').value);
  if(document.getElementById('Data').innerHTML == null){
    $( "span" ).text( "Inserisci una data" ).show().fadeOut( 5000 );
    return false;
  }
  console.log(document.getElementById('Data').value);
  const date = new Date(document.getElementById('Data').value);
  let day = date.getDay();
  if( day === 0 || day === 6){
    $( "span" ).text( "Data Invalida" ).show().fadeOut( 5000 );
    e.preventDefault();
    return false;
  }
  
  return true;
}