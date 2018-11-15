<?php

session_start();

$bd = mysqli_connect('localhost','root','');

mysqli_connect_db($bd,'user_registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where name = '$name'";

$result = mysqli_query($bd, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Ce pseudonyme a déjà été pris";
} else {
    $reg= " insert into usertable(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo" Le compte a été crée ";
}
?>