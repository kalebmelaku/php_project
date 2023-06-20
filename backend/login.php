<?php
require './db.php';
if (isset($_POST['login'])) {

    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashPass = md5($password);
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $rs = mysqli_query($conn, $sql);
    if (mysqli_num_rows($rs) > 0) {
        $row = mysqli_fetch_assoc($rs);
        $email = $row['email'];
        $pass = $row['password'];
        $status = $row['status'];
        $trial = $row['trial'];
        if ($status == 0) {
            header("Location: ../InfoSavvy/index.php?err=Account Blocked");
        } else {
            $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND
                `password` = '$hashPass'";
            $rs = mysqli_query($conn, $sql);

            if (mysqli_num_rows($rs) > 0) {
                mysqli_query($conn, "UPDATE `users` SET `trial`= 0 WHERE `email` = '$email'");

                header("Location: ../AdminDash/");
            } else {
                $trial++;
                if ($trial >= 3) {
                    mysqli_query($conn, "UPDATE `users` SET `status`='0' WHERE `email` = '$email'");
                    header("Location: ../InfoSavvy/index.php?err=Account Blocked");
                } else {
                    mysqli_query($conn, "UPDATE `users` SET `trial`='$trial' WHERE `email` = '$email'");
                    header("Location: ../InfoSavvy/index.php?err=Password incorrect");
                }
            }
        }
    } else {
        header("Location: ../InfoSavvy/index.php?err=User Doesn't Exist");
    }
    // $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND
    //     `password` = '$hashPass'";

    // $rs = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($rs) > 0) {
    //     header("Location: ../AdminDash/");
    // } else {
    //     header("Location: ../InfoSavvy/index.php?err=Username or password incorrect");
    // }
}
