<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=user_registration;charset=utf8', 'root', '');

$name = $_POST['user'];
$pass = $_POST['password'];

$stmt = $bdd->prepare('SELECT COUNT(*) FROM users WHERE name = "'.$name.'" && password = "'.$pass.'"');
$stmt->execute(array($name));

if ($stmt ->fetchColumn() != 0) {
    header('location:accueil.php');
}else{
    header('location:login.php');
}

?>