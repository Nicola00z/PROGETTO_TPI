
function notification(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let err = urlParams.get("e");
    if(err == 1){
        $( "span" ).text( "Oggetto aggiunto con successo" ).show().fadeOut( 5000 );
    }else if(err == 2){
        $( "span" ).text( "Account creato con successo" ).show().fadeOut( 5000 );
    }
}