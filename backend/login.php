<?php
    require './db.php';
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $hashPass = md5($password);
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND
        `password` = '$hashPass'";

        $rs = mysqli_query($conn, $sql);

        if(mysqli_num_rows($rs) > 0){
            header("Location: ../AdminDash/");
        }else{
            header("Location: ../InfoSavvy/index.php?err=Username or password incorrect");
        }
    }
