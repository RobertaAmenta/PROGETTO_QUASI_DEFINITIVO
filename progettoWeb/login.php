<?php
session_start();
require 'functions.php';
require 'connection.php';
require 'header.php';

?>

<!--Verrà visualizzato alert di errore se il login non verrà effettuato con successo-->
<?php
if (!empty($_SESSION['errors'])) { ?>
    <div class="alert alert-danger" id="mess"><?= $_SESSION['errors'] ?></div>
    <?php
    $_SESSION['errors'] = '';
}
?>

<body class="text-center logsign">

<!--BEGIN FORM LOGIN-->
<form action="loginuser.php" method="POST">
    <div class="form-signin w-100 m-auto" id="loginElement">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="70" fill="currentColor"
             class="bi bi-person-workspace" viewBox="0 0 16 16">
            <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
            <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
        </svg>
        <h1 class="h3 mb-3 fw-normal">SIGN IN</h1>
        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
</form>
<!--END FORM LOGIN-->

<?php
require 'footer.php';
?>




