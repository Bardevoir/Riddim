<?php

$bdd = new PDO('mysql:host=localhost;dbname=user_registration;charset=utf8', 'root', '');

$name = $_POST['user'];
$pass = $_POST['password'];

$stmt = $bdd->prepare('SELECT COUNT(*) FROM users WHERE name = "'.$name.'"');
$stmt->execute(array($name));

if ($stmt ->fetchColumn() != 0) {
    echo 'il existe déjà un compte avec le meme nom';
}else{
    $bdd->exec(' insert into users values (\''.$name.'\',\''.$pass.'\') ');
    echo 'Le compte a bien été crée';
}

?>