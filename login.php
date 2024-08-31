<?php
session_start();

$email = $_POST['email'];
$password = $_POST['pass'];

$hardcodedEmail = 'xxxxx';
$hardcodedPassword = 'xxxxx';

if ($email === $hardcodedEmail && $password === $hardcodedPassword) {
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: home.php");
    exit;
} else {
    echo "<script>alert('Email atau Password salah!');window.location.href='index.html';</script>";
}
?>
