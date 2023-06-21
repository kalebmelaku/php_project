<?php
require './db.php';

if(isset($_GET['addPost'])){
    $id = $_GET['user'];
    $title = $_GET['title'];
    $sub_title = $_GET['sub_title'];
    $category = $_GET['category'];

    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($rs);
    $name = $row['fname'];

    $sql = "INSERT INTO `blog`( `title`, `sub_title`, `user`, `category`) VALUES 
    (
        '$title',
        '$sub_title',
        '$name',
        '$category'
    )";

    $rs = mysqli_query($conn, $sql);
    if($rs){
        header('Location: ../AdminDash');
    }
}

?>