

function changeClassStatus(piano){
    var aule = document.getElementsByClassName('aula');
const date = new Date();
let schoolHour;
let hour = date.getHours();
let minute = date.getMinutes();
let currentday = date.getDay();
let orario;
if(currentday == 5){
    orario = ['50', '40', '30', '40', '40', '30', '40', '30'];
}else if( 0 < currentday && currentday < 5){
    orario = ['50', '40', '50', '40', '50', '40'];
}else{
    schoolHour = 10;
}
console.log(hour);
if(currentday == 5){
    switch(hour){
        case 8: if(minute < orario[0]){schoolHour = 1}else{schoolHour = 2} break;
        case 9: if(minute < orario[1]){schoolHour = 2}else{schoolHour = 3} break;
        case 10: if(minute < orario[2]){schoolHour = 3}else{schoolHour = 4} break;
        case 11: if(minute < orario[3]){schoolHour = 4}else{schoolHour = 5} break;
        case 12: if(minute < orario[4]){schoolHour = 5}else{schoolHour = 6} break;
        case 13: if(minute < orario[5]){schoolHour = 6}else{schoolHour = 7} break;
        case 14: if(minute < orario[6]){schoolHour = 7}else{schoolHour = 8} break;
        case 15: if(minute < orario[7]){schoolHour = 8}else{schoolHour = 10} break;
        default: schoolHour = 10;
    }
}else if(0 < currentday && currentday < 5){
    switch(hour){
        case 8: if(minute < orario[0]){schoolHour = 1}else{schoolHour = 2} break;
        case 9: if(minute < orario[1]){schoolHour = 2}else{schoolHour = 3} break;
        case 10: if(minute < orario[2]){schoolHour = 3}else{schoolHour = 4} break;
        case 11: if(minute < orario[3]){schoolHour = 4}else{schoolHour = 5} break;
        case 12: if(minute < orario[4]){schoolHour = 5}else{schoolHour = 6} break;
        case 13: if(minute < orario[5]){schoolHour = 6}else{schoolHour = 10} break;
        default: schoolHour = 10;
    }
}


    
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        
        let response = this.responseText.split(";");
        console.log(response);
        for(let i = 0; i < response.length; i++){
            let indivResponse = response[i].split(",");
            let img
            if(schoolHour != 10){
                if(piano == 0){
                    img = "I" + delZeros(indivResponse[0]);
                }else{
                    img = "I" + indivResponse[0].substr(1,3);
                }
            }else{
               for(let x = 0; x < aule.length ; x++){
                    console.log(aule[x].id);
                    document.getElementById(aule[x].id).src = "./src/libera.png";
                    
               }
               return;
            }
            console.log(indivResponse[1]);
            console.log(img);
            if(indivResponse[1] == "true"){
                
                document.getElementById(img).src="./src/libera.png";
            }else{
                document.getElementById(img).src="./src/occupata.png"; 
            }
            console.log(document.getElementById(img).src);
        }
        
      }
      console.log(day + " " + piano + " " + schoolHour);
        xmlhttp.open("GET", "getClassStatus.php?q=" + day + "&piano=" + piano + "&ora=" + schoolHour);
        xmlhttp.send();
    }
    

function delZeros(strin){
    if(strin.substr(2,2) == "00"){
        return strin.charAt(0) +  strin.charAt(1); 
    }else{
        return strin.charAt(0) + strin.substr(2,1);
    }
}