<?php

//Questa funzione verifica se l'utente ha effettuato il Login e ritorna il valore dell'email della sessione
function isUserLoggedIn()
{
    return $_SESSION['user_email'] ?? '';
}

//Questa funzione chiude la sessione effettuando il Logout dell'utente ritornando il valore dell'email della sessione
function logout()
{
    session_destroy();
    return $_SESSION['user_email'] ?? '';
}
