<?php
    include 'session.php';
    include 'connection.php';

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
    <div class="change">
       <div class="header">
            <div class="editinfo">
                <img src="images/<?=$row['img'];?>" alt="">
                
            </div><br>
            <form action="profile.php">
                <div class="image_input">
                    <label for="image">Select Your Image</label><br>
                    <input type="file" id="image">
                </div>
            </form>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $('span').click(function(){
            $('form').fadeIn();
        });
        // $('span').click(function(){
        //     $('form').slideToggle();
        // });
    </script>
</body>
</html>
<style>
    form{
        display:none;
    }
    *{
        margin:0;
        padding:0;
    }
    .change{
        margin-left:35%;
        margin-top:5%;
    }
    img{
        width:100%;
    }
    .editinfo img{
        width:150px;
        height:150px;
        border-radius:50%;
    }
    
    .image_input label{
        font-size:20px;
    }
</style>