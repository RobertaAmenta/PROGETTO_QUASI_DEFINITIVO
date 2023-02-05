<?php
session_start();
require 'connection.php';

//Se non vengono inseriti dati nel form di sign up, l'utente verrà indirizzato alla pagina index
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
    $errors .= 'Field password';
}
//END VALIDATION

$sql = 'SELECT email from users where email=?';
$stm = $conn->prepare($sql);
if (!$stm) {
    die($conn->error);
}
$stm->bind_param('s', $email);

$res = $stm->execute();
$result = $stm->get_result();
if ($res && $result->num_rows) {
    $errors .= 'Email already taken';
}
$stm->close();
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location:signedup.php');
    die();
}

$sql = 'INSERT INTO users (email, password) values(?,?)';
$stm = $conn->prepare($sql);

if (!$stm) {
    die($conn->error);
}
//Con password_hash viene criptata la password inserita dall'utente dopo la registrazione
$passHash = password_hash($password, PASSWORD_DEFAULT);
$resBind = $stm->bind_param('ss', $email, $passHash);
$res = $stm->execute();

if ($res && $stm->affected_rows) {
    $_SESSION['message'] = 'User registered correctly';
    $_SESSION['user_email'] = $email;
    header('Location:index.php');
    die();
} else {
    $_SESSION['errors'] = $conn->error;
    header('Location:signedup.php');
    die();
}
