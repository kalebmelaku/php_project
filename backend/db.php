<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'blog';

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    echo 'Error connecting to database';
}

?>