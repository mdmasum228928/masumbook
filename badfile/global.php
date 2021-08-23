<?php
    include 'connection.php';
    include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';?>
    <table>
        <div class="site">
            <?php 
                
                $sql = "SELECT * FROM user
                INNER JOIN categories
                ON categories.user_id = user.id";
                $query = mysqli_query($conn,$sql);
                if($query){
                    if(mysqli_num_rows($query)>0){
                        while($paste=mysqli_fetch_assoc($query)){
        
            ?>
            <div class="singel_create">
                <div class="user_profile">
                    <img src="images/<?=$paste['img'];?>" alt="">
                    <a href="#"><span><?=$paste['name'];?></span></a>
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
    .site{
        width:40%;
        margin:0 auto;
    }
    .singel_create{
        background:#FFFFFF;
        border-radius:10px;
        padding:20px;
        margin:10px 0;
    }
    .user_profile{
        display:flex;
    }
    .user_profile img{
        width:40px;
        height:40px;
        border-radius:100%;
        margin-right:10px;
    }
    .user_profile a{
        margin-top:12px;
        font-weight:bold;
        color:black;
        text-decoration:none;
    }
    .user_profile a:hover{
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