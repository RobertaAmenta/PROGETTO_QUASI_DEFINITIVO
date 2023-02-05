<?php
session_start();
require 'functions.php';
require 'connection.php';
require 'header.php';

?>

<body class="text-center logsign">

<!--BEGIN FORM REGISTRAZIONE-->
<form action="signup.php" method="POST">
    <div class="form-signin w-100 m-auto" id="loginElement">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="70" fill="currentColor"
             class="bi bi-person-fill-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
        </svg>
        <h1 class="h3 mb-3 fw-normal">SIGN UP</h1>
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
<!--END FORM REGISTRAZIONE-->
<?php
require 'footer.php';
?>