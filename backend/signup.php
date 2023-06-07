<?php
    require './db.php';

    if(isset($_POST['signup'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password === $confirm_password){
            $sql = "INSERT INTO `users`(`fname`, `lname`, `phone`, `email`, `password`) VALUES (
                '$firstname',
                '$lastname',
                '$phone',
                '$email',
                '$password'
                )";
            
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: ../InfoSavvy/index.php?error=You can now login");
            }else{
                echo $conn->error;
            }
        }else{
            header("Location: ../InfoSavvy/index.php?error=Passwords does not match");
        }

    }else{
        echo 'button isn\'t clicked';
    }
