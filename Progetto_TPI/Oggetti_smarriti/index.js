
function setData(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let id = urlParams.get("id");
    let aula = urlParams.get("aula");
    if(aula !== null && id !== null){
        document.getElementById('ogg').value=id;
        document.getElementById('aula').value=aula;
        document.getElementById('id').value=id;
    }
}