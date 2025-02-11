<?php
session_start();
session_set_cookie_params(7200);
$username = trim($_POST['username']);
$password = trim($_POST['password']);

include 'includes/config.php';
$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
$result = $mysqli->query("SELECT `password` FROM `a_users` WHERE `username` = '$username'");

$row = $result->fetch_assoc();
if ($password == $row['password']) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit;
} else {
    echo "Неправильный пароль";
}
exit;
?>