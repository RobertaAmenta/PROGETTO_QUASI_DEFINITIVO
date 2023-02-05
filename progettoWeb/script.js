//Questa funzione definisce la chiusura automatica dell'alert di login effettuato con successo
//e quello di errore nel login
function closeDiv(){
    document.getElementById("mess").style.display=" none";
}
window.setTimeout(closeDiv,5000);

//Queste funzioni bloccano le date precedenti al giorno corrente nella scelta
// del check-in e del check-out nel modal di prenotazione
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("setTodaysDate1")[0].setAttribute('min', today);

var today = new Date().toISOString().split('T')[0];
document.getElementsByName("setTodaysDate2")[0].setAttribute('min', today);