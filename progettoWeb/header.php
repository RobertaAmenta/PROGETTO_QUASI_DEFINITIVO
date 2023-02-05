<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Skyline Hotel</title>

    <!--Style-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="sign-in.css" rel="stylesheet">
</head>

<body>

    <!--Alla variabile $page viene assegnato il nome del file dello script in esecuzione sul web server-->
    <?php
    $page = $_SERVER['SCRIPT_NAME'];
    ?>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" id="zoomPage">
        <!--BEGIN TOPBAR-->
        <div class="container-fluid" id="barra">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-buildings text-white" viewBox="0 0 16 16">
                    <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                    <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                </svg>

                <!--Viene assegnata la classe "active" agli hyperlink della topbar verificando che il nome della pagina attiva sia quello dell'hyperlink selezionato-->
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 px-0" id="testo">
                    <li><a class="nav-link px-2 text-white <?= strpos($page, 'index.php') !== false ? 'active' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="nav-link px-2 text-white <?= strpos($page, 'rooms.php') !== false ? 'active' : '' ?>" href="rooms.php">Rooms</a></li>
                    <li><a class="nav-link px-2 text-white <?= strpos($page, 'restaurant.php') !== false ? 'active' : '' ?>" href="restaurant.php">Restaurant</a></li>
                    <li><a class="nav-link px-2 text-white <?= strpos($page, 'gallery.php') !== false ? 'active' : '' ?>" href="gallery.php">Gallery</a></li>
                    <li><a class="nav-link px-2 text-white" href="#footbar">About Us</a></li>
                </ul>

                <div class="text-end">
                    <!--Se l'user non ha effettuato il login verranno visualizzati solo i tasti di login e sign up-->
                    <?php if (!isUserLoggedIn()) { ?>
                        <a type="button"class="btn btn-outline-light <?= strpos($page, 'signedup.php') !== false ? 'active' : '' ?>" href="signedup.php">SIGN UP</a>
                        <a type="button" class="btn btn-info <?= strpos($page, 'login.php') !== false ? 'active' : '' ?>" href="login.php">LOGIN</a>

                    <?php } else { ?>
                        <div class="row">
                            <!--Se l'utente ha effettuato il login, verranno visualizzati solo i tasti di booking e di logout-->
                            <!--BOTTONE PRENOTAZIONE-->
                            <div id="bottonePrenotazione" class="dropdown col-6">
                                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    BOOKING
                                </button>
                                <ul class="dropdown-menu">
                                    <!--Al click viene generato il modal per una nuova prenotazione di una camera-->
                                    <li><a class="dropdown-item" id="book_button" onclick='newModalInstance(0, {})'>Book now</a></li>
                                    <li><a class="dropdown-item <?= strpos($page, 'listaPrenotazioniUtente.php') !== false ? 'active' : '' ?>" href="listaPrenotazioniUtente.php">Modify</a></li>
                                </ul>
                            </div>
                            <!--BOTTONE LOGOUT-->
                            <div class="col-6">
                                <form action="logout.php" method="POST">
                                    <input type="hidden" name="logout" value="1">
                                    <button id="bottoneLogout" class="btn btn-light <?= strpos($page, 'logout.php') !== false ? 'active' : '' ?>" href="logout.php">LOGOUT</button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <!--END TOPBAR-->

    <!--BEGIN MODAL PRENOTAZIONE CAMERE-->
    <div class="modal fade" id="booking_modal" tabindex="-1" aria-labelledby="booking_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addPrenotaModalLabel">Add booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="check_in" class="form-label">Check in</label>
                        <input type="date" class="form-control" id="check_in" name="setTodaysDate1" placeholder="Check in date">
                    </div>
                    <div class="mb-3">
                        <label for="check_out" class="form-label">Check out</label>
                        <input type="date" class="form-control" id="check_out" name="setTodaysDate2" placeholder="Check out date">
                    </div>
                    <div class="mb-3">
                        <label for="numberPeople" class="form-label">N.People</label>
                        <input type="number" class="form-control" id="numberPeople" placeholder="N.people" min="1"
                               step="any">
                    </div>
                    <div class="mb-3">
                        <label for="room_type" class="form-label">Room Type:</label>
                        <select type="text" id="room_type" class="form-control" name="room_type">
                            <option value="1">Madison Club suite</option>
                            <option value="2">Manhattan room</option>
                            <option value="3">Skyline Club double</option>
                            <option value="4">Platinum suite</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <button type="button" class="btn btn-primary" id="send">Aggiungi</button>
                </div>
            </div>
        </div>
    </div>
    <!--END MODAL PRENOTAZIONE-->

    <main role="main" class="inner cover">