<?php
    include 'session.php';
    include 'connection.php';
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $query = mysqli_query($conn,$sql);
    $other = mysqli_fetch_assoc($query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'addfile/fontawesome.php';?>

</head>
<body>
    <?php include 'home.php';?>
    <div class="profile_area">
        <div class="profile_photo">
            <img src="images/<?=$other['img'];?>" alt=""><br><br>
            <div class="name">
                <span class="title">Name : </span><span><?=$other['name'];?></span>
            </div>
            <div class="name">
                <span class="title">Email : </span><span><?=$other['email'];?></span>
            </div>
        </div>
    </div>
    <table>
        <div class="site">
        <div class="message">
                <a href="chat.php?user_id=<?=$user_id;?>">Message</a>
            </div>
            <?php 
                $sql = "SELECT * FROM categories WHERE user_id = $user_id";
                $query = mysqli_query($conn,$sql);
                if($query){
                    if(mysqli_num_rows($query)>0){
                        while($paste=mysqli_fetch_assoc($query)){
        
            ?>
            <div class="singel_create">
                <div class="user_profile">
                    <img src="images/<?=$other['img'];?>" alt="">
                    <div class="name_date">
                        <a href="#"><span><?=$other['name'];?></span></a>
                        <span class="date"><?=$paste['post_time'];?></span>
                    </div>
                </div>
                <h3><?php echo $paste['title'];?></h3>
                <p><?php echo $paste['details'];?></p>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </table>
</body>
</html>
<style>
    body{
        background:#F0F2F5;
    }
    .profile_area{
        text-align:center;
        padding:30px 0;
    }
    .profile_photo img{
        width:200px;
        height:200px;
        border-radius:100%;
    }
    .title{
        font-weight:900;
    }
    .name span{
        font-size:20px;
    }
    .name{
        margin-bottom:5px;
    }
    .message{
        margin-top:15px;
    }
    .site{
        width:40%;
        margin:0 auto;
    }
    .message{
        margin-bottom:20px;
        display:flex;
        justify-content:flex-end;
    }
    .message a{
        background:#3498db;
        padding:10px;
        color:#fff;
        text-decoration:none;
        font-weight:700;
        border-radius:5px;
    }
    .singel_create{
        background:#FFFFFF;
        border-radius:10px;
        padding:20px;
        margin:10px 0;
    }
    .singel_create h3{
        padding-bottom:5px;
    }
    .user_profile{
        display:flex;
        padding-bottom:15px;
    }
    .user_profile img{
        width:40px;
        height:40px;
        border-radius:100%;
        margin-right:10px;
    }
    .name_date a{
        margin-top:5px;
        font-weight:bold;
        color:black;
        text-decoration:none;
        display:block;
    }
    .name_date a:hover{
        text-decoration:underline;
        cursor:pointer;
    }
    .date:hover{
        text-decoration:underline;
        cursor:pointer;
    }
    .post{
        text-align:center;
        padding:10px;
        background:#3498db;
        margin-bottom:20px;
        color:#fff;
    }
    .posted a{
        text-decoration:none;
        
        font-weight:900;
        letter-spacing: 3px;
    }
    .post:hover{
        background:#0B5ED7;
    }
    

</style>