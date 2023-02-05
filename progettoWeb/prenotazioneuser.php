<?php
session_start();
require 'connection.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        getBookings();
        break;

    case "POST":
        addBooking();
        break;

    case "PUT":
        editBooking();
        break;

    case "DELETE":
        deleteBooking();
        break;

    default:
        echo json_encode(['error' => 'Metodo non valido']);
        break;
}


function getBookings()
{
    global $conn;

    $sql = "SELECT * FROM prenotazione WHERE id_utente = " . $_SESSION['id_user'];
    if (isset($_GET["id_prenotazione"]))
        $sql .= " AND id_prenotazione = " . $_GET["id_prenotazione"];
    $sql .= " ORDER BY check_in";

    if ($result = $conn->query($sql)) {
        $bookings = [];
        while ($row = $result->fetch_assoc()) {
            $bookings["bookings"][] = $row;
        }
        echo json_encode($bookings);

    } else {
        echo json_encode(['error' => 'Errore nel caricamento delle imposte']);
    }
}

function addBooking()
{
    global $conn;
    $checkIn = $conn->real_escape_string($_POST["check_in"]);
    $checkOut = $conn->real_escape_string($_POST["check_out"]);
    $numberPeople = $conn->real_escape_string($_POST["numberPeople"]);
    $room_type = $conn->real_escape_string($_POST["room_type"]);
    $error = [];

    if (!$checkIn)
        $error["check_in"] = "Inserisci la data di check in";
    if (!$checkOut)
        $error["check_out"] = "Inserisci la data di check in";
    if (!$numberPeople || !is_numeric($numberPeople))
        $error["numberPeople"] = "Inserisci numero di persone";
    if (!$room_type)
        $error["room_type"] = "Inserisci tipo di camera";

    if (count($error) > 0) {
        echo json_encode($error);
    } else {
        $sql = "INSERT INTO prenotazione (id_utente,check_in,check_out, num_persone, stanza_prenotata) 
                VALUES (" . $_SESSION['id_user'] . ", '$checkIn', '$checkOut', '$numberPeople', '$room_type')";

        if ($conn->query($sql)) {
            echo json_encode(['success' => 'Prenotazione effettuata con successo']);
        } else {
            echo json_encode(['error' => 'Errore nella prenotazione della camera']);
        }
    }
}

function editBooking()
{
    global $conn;
    parse_str(file_get_contents('php://input'), $_PUT);
    $id_prenotazione = $conn->real_escape_string($_PUT["id_prenotazione"]);
    $check_in = $conn->real_escape_string($_PUT['check_in']);
    $check_out = $conn->real_escape_string($_PUT["check_out"]);
    $numberPeople = $conn->real_escape_string($_PUT["numberPeople"]);
    $room_type = $conn->real_escape_string($_PUT["room_type"]);

    $error = [];

    if (!$check_in)
        $error["check_in"] = "Inserisci il check in";
    if (!$check_out)
        $error["check_out"] = "Inserisci il check out";
    if (!$numberPeople || !is_numeric($numberPeople))
        $error["numberPeople"] = "Inserisci numero persone";
    if (!$room_type)
        $error["room_type"] = "Inserisci la camera";

    if (count($error) > 0) {
        echo json_encode($error);
    } else {
        $sql = "UPDATE prenotazione SET check_in = '$check_in', check_out = '$check_out', num_persone = '$numberPeople', stanza_prenotata = '$room_type' WHERE id_prenotazione = $id_prenotazione";
        if ($conn->query($sql)) {
            echo json_encode(['success' => 'Imposta modificata con successo']);
        } else {
            echo json_encode(['error' => 'Errore nella query']);
        }
    }
}

function deleteBooking()
{
    global $conn;
    parse_str(file_get_contents('php://input'), $_DELETE);
    $id_prenotazione = $conn->real_escape_string($_DELETE["id_prenotazione"]);
    $sql = "DELETE FROM prenotazione WHERE id_prenotazione = $id_prenotazione";
    if ($conn->query($sql)) {
        echo json_encode(['success' => 'Imposta eliminata con successo']);
    } else {
        echo json_encode(['error' => 'Errore nell\'eliminazione dell\'imposta']);
    }
}

$conn->close();
