<?php
$conn = new mysqli('localhost', 'robiprova1', 'PSjp6XV4RQTP', 'my_robiprova1');

if ($conn->connect_error) {
    die($conn->connect_error);
}

// File di configurazione per la connessione al db