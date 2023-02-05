<?php
session_start();
require 'connection.php';

//Se non vengono inseriti dati nel form di login, l'utente verrà indirizzato alla pagina index
if (empty($_POST)) {
    header('Location:index.php');
    die();
}

$errors = '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//BEGIN VALIDATION
if (empty($email)) {
    $errors .= 'Field email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors .= 'Invalid email';
}
if (empty($password)) {
    $errors .= 'Field password is required';
}
//END VALIDATION

$sql = 'SELECT * from users where email=?';
$stm = $conn->prepare($sql);
if (!$stm) {
    die($conn->error);
}
$stm->bind_param('s', $email);
$res = $stm->execute();
$result = $stm->get_result();
var_dump($result);

if ($res && $result->num_rows) {
    $row = $result->fetch_assoc();
    $stm->close();
    if (password_verify($password, $row['password'])) {
        $_SESSION['message'] = 'User loggedin correctly';
        $_SESSION['user_email'] = $email;
        $id = $row['id_user'];
        $_SESSION['id_user'] = $id;
        header('Location:index.php');
    } else {
        $_SESSION['errors'] = 'Wrong password';
        header('Location:login.php');
        die();
    }
} else {
    $stm->close();
    $_SESSION['errors'] = 'Email does no exist';
    header('Location:login.php');
    die();
}
