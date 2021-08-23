<?php
    include 'connection.php';
    $error = '';
    $invalid = '';
    session_start();
    if(isset($_SESSION['login_user'])){
        header('location:index.php');
    }
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            $error = "<span>This is field is required</span>";
        }
        else{
            $sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
            $query= mysqli_query($conn,$sql);
            if(mysqli_num_rows($query)>=1){
                $_SESSION['login_user']=$email;
                header('location:index.php');
            }
            else{
                $invalid = "Invalid email & password wrong";
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login_area">
        <div class="login">
            <h2>Log in Your Account</h2>
            <form action="?" method="POST" autocomplete="off">
                <div class="input_area">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Enter your email"><br>
                    <span><?=$error;?></span>
                </div>
                <div class="input_area">
                    <i class="fas fa-unlock-alt"></i>
                    <input type="password" name="password" placeholder="Enter your password"><br>
                    <span><?=$error;?></span>
                    <span><?=$invalid;?></span>
                    
                </div>
                <div class="input_area">
                    <input type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
    <style>
*{
    margin:0;
    padding:0;
    outline:0;
}
span{
    color:#fff;
    padding-top:5px;
    padding-left:10px;
    display:inline-block;
    font-size:18px;
}
.login_area{
    background-color: black;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login{
    border: 1px solid #fff;
    padding: 40px 50px 50px 50px;
}
h2{
    color: #fff;
    text-align: center;
    margin-bottom: 30px;
}
.input_area{
    padding-bottom: 10px;
}
.input_area input[type=email],
.input_area input[type=password]{
    padding: 5px;
    width: 250px;
    background: transparent;
    border:none;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-size: 16px;
}
.input_area input[type=submit]{
    margin-left: 25px;
    width: 265px;
    padding: 7px 5px;
    margin-top: 10px;
    background: transparent;
    color: #fff;
    border:none;
    border:1px solid #fff;
    font-weight: 900;
    transition: .5s;
}
.input_area input[type=submit]:hover{
    background: red;
    border: 1px solid red;
}
.input_area i{
    color: #fff;
    padding-right: 10px;
}
    </style>
</body>
</html>