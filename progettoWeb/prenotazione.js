//Vengono definiti gli elementi della pagina
var checkIn = $("#check_in");
var checkOut = $("#check_out");
var numberPeople = $("#numberPeople");
var roomType = $("#room_type");
var bookTable = $("#bookTable");
var bookingModal = $("#booking_modal");
var addPrenotaModalLabel = $("#addPrenotaModalLabel");
var send = $("#send");
var ADD_BOOK = 0;
var EDIT_BOOK = 1;
var bookId = 0;


//Al caricamento del documento viene caricata la tabella delle prenotazioni
$(document).ready(function () {
    getBookings();
});

//Converte una data in formato dd/mm/yyyy
function convertDate(date) {
    var date_new = new Date(date);
    return new Intl.DateTimeFormat('it-IT').format(date_new);
}


//Questa funzione si occupa di generare il modal corretto
function newModalInstance(mode, data) {
    switch (mode) {
        case 0:
            //Nel caso di aggiunta di una prenotazione
            addPrenotaModalLabel.text("Add booking")
            send.text("Book now")
            break;
        case 1:
            //Nel caso della modifica di una prenotazione
            addPrenotaModalLabel.text("Edit booking")
            send.text("Edit now")
            break;
    }

    //Vengono rimosse le classi "is-invalid" in modo tale da non mostrare errori all'apertura del modal
    checkIn.removeClass("is-invalid");
    checkOut.removeClass("is-invalid");
    numberPeople.removeClass("is-invalid");
    roomType.removeClass("is-invalid");

    //Vengono posti i campi vuoti o con i dati della prenotazione selezionata
    checkIn.val("" || data.check_in);
    checkOut.val("" || data.check_out);
    numberPeople.val("" || data.num_persone);
    roomType.val("" || data.stanza_prenotata);


    //Viene mostrato il modal
    bookingModal.modal("show");
}


//Questa funzione si occupa della validazione in base ai valori presenti nel json
function validation(data) {
    data.check_in ? checkIn.addClass("is-invalid") : checkIn.removeClass("is-invalid");
    data.check_out ? checkOut.addClass("is-invalid") : checkOut.removeClass("is-invalid");
    data.numberPeople ? numberPeople.addClass("is-invalid") : numberPeople.removeClass("is-invalid");
    data.room_type ? roomType.addClass("is-invalid") : roomType.removeClass("is-invalid");
}


//Questa funzione recupera tutte le prenotazioni dell'utente
function getBookings() {

    $.ajax({
        url: "../prenotazioneuser.php",
        type: "GET",
        success: function (data) {

            var json = JSON.parse(data);
            console.log(json);

            var camera = "";
            var idcamera = 0;

            var html = ""

            for (var i = 0; i < json.bookings.length; i++) {
                html += "<tr class='align-middle' id=" + json.bookings[i].id_prenotazione + ">";
                html += "<td>" + convertDate(json.bookings[i].check_in) + "</td>";
                html += "<td>" + convertDate(json.bookings[i].check_out) + "</td>";
                html += "<td>" + json.bookings[i].num_persone + "</td>";
                idcamera = json.bookings[i].stanza_prenotata;
                switch (idcamera) {
                    case "1":
                        camera = "MADISON CLUB SUITE";
                        break;
                    case "2":
                        camera = "MANHATTAN ROOM";
                        break;
                    case "3":
                        camera = "SKYLINE CLUB DOUBLE";
                        break;
                    case "4":
                        camera = "PLATINUM SUITE";
                        break;
                }
                html += "<td>" + camera + "</td>";
                html += "<td>";
                console.log(json.bookings[i].id_prenotazione);
                html += "<button type='button' class='btn btn-warning m-2' onclick='getBooking(" + json.bookings[i].id_prenotazione + ")'><i class=\"fa-solid fa-pencil text-dark\"></i></button>";
                html += "<button type='button' class='btn btn-danger m-2' onclick='deleteBooking(" + json.bookings[i].id_prenotazione + ")'><i class=\"fa-solid fa-trash text-dark\"></i></button></td>";
                html += "</tr>";
            }

            bookTable.empty();
            bookTable.append(html);


        },
        error: function (data) {
            console.log(data);
        }

    });

}

//Questa funzione si occupa di recuperare i dati di una prenotazione in base all'id
function getBooking(id) {
    console.log(id);
    $.ajax({
        method: 'GET',
        url: "../prenotazioneuser.php",
        data: {
            id_prenotazione: id
        },
        cache: false,
        success: function (result) {
            var json = JSON.parse(result);
            if (json.error)
                console.log(result);
            else {
                //Nel caso in cui non ci fossero errori viene mostrato il modal con i dati della prenotazione
                //e viene impostato l'id della stessa
                bookId = id;
                console.log(json);
                newModalInstance(EDIT_BOOK, json.bookings[0]);
                ;
            }
        }
    });
}

//Questa funzione si occupa di aggiungere una prenotazione
function setBooking() {

    $.ajax({
        url: "../prenotazioneuser.php",
        type: "POST",
        data: {
            check_in: checkIn.val(),
            check_out: checkOut.val(),
            numberPeople: numberPeople.val(),
            room_type: roomType.val()
        },
        success: function (data) {
            var json = JSON.parse(data);
            console.log(data);
            if (json.success) {
                //Nel caso in cui la richiesta vada a buon fine viene chiuso il modal e viene ricaricata la tabella
                getBookings();
                $("#booking_modal").modal("hide");
            } else {
                validation(json);
            }
        },
        error: function (data) {
            console.log("Problema con la richiesta");
        }
    });
}


//Questa funzione si occupa di aggiornare una prenotazione
function editBooking() {
    console.log(bookId);
    $.ajax({
        method: 'PUT',
        url: "../prenotazioneuser.php",
        data: {
            id_prenotazione: bookId,
            check_in: checkIn.val(),
            check_out: checkOut.val(),
            numberPeople: numberPeople.val(),
            room_type: roomType.val()
        },
        cache: false,
        success: function (result) {
            console.log(result);
            var json = JSON.parse(result);
            if (json.error)
                console.log(result);
            else {
                //Nel caso in cui non ci fossero errori viene chiuso il modal e viene ricaricata la tabella
                getBookings();
                $("#booking_modal").modal("hide");
            }
        }
    });
}


//Questa funzione si occupa di eliminare una prenotazione in base all'id
function deleteBooking(id) {
    //Viene identificata la riga da eliminare
    var tr = $("#" + id).closest('tr');
    $.ajax({
        method: 'DELETE',
        url: "../prenotazioneuser.php",
        data: {
            id_prenotazione: id
        },
        cache: false,
        success: function (result) {
            var json = JSON.parse(result);
            if (json.error)
                console.log(result);
            else {
                //Nel caso in cui non ci fossero errori viene eliminata la riga
                tr.fadeOut(1000, function () {
                    getBookings();
                });
            }
        }
    });
};


//Il tasto svolgerà una determinata azione in base al suo testo, se è "Book now" verrà aggiunta una nuova prenotazione,
// se è "Edit now" verrà modificata una prenotazione
$("#send").click(function () {
    console.log(send.text());
    if ($("#send").text() == "Book now")
        setBooking();
    else if ($("#send").text() == "Edit now")
        editBooking();
});

