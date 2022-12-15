
function setData(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let id = urlParams.get("id"); // prendo il parametro dall'url
    let aula = urlParams.get("aula"); // prendo il parametro dall'url
    if(aula !== null && id !== null){
        document.getElementById('ogg').value=id; // assegno il valore richiesto alle select
        document.getElementById('aula').value=aula;// assegno il valore richiesto alle select
        document.getElementById('id').value=id;// assegno il valore richiesto alle select
    }
}