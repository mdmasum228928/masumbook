<?php
    include 'connection.php';
    session_start();
    $user_check = $_SESSION['login_user'];
    $sql = "SELECT * From user WHERE email = '$user_check'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    $login_session = $row['name'];
    // echo $login_session;

    if(!isset($login_session)){
        mysqli_close($conn);
            header('location:login.php');
    }

?>