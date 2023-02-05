<?php
session_start();
require 'functions.php';
require 'connection.php';
require 'header.php';

?>

<body class="text-center logsign">

<!--BEGIN LISTA PRENOTAZIONI-->
<div class="row" id="loginElement">
    <div class="span12 table-responsive bg-white rounded border border-dark">
        <table class="table table-hover text-dark">
            <thead>
            <tr>
                <th scope="col">Check in</th>
                <th scope="col">Check out</th>
                <th scope="col">Number people</th>
                <th scope="col">Room</th>
                <th scope="col">Modify / Delete</th>
            </tr>
            </thead>
            <!--I dati verranno inseriti tramite javascript (prenotazione.js)-->
            <tbody id="bookTable">

            </tbody>
        </table>
    </div>
</div>
<!--END LISTA PRENOTAZIONI-->

<?php
require 'footer.php';
?>


