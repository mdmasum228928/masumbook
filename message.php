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
    <title>Message</title>
</head>
<body>
    <div class="message">
        <div class="message_area">
            <div class="header_area">
                <img src="images/193240327_2955603814715330_8331363000892118900_n.jpg" alt="">
                <span>Masum</span>
            </div>
            <div class="section_area">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta necessitatibus minus provident asperiores. Reprehenderit veniam ex laboriosam modi, nam quasi quae esse obcaecati consequuntur neque magni quam perspiciatis deserunt autem!</p>
            </div>
        </div>
    </div>
    <style>
        .message{
            display:flex;
            justify-content:center;
        }
        .message_area{
            width:40%;
            border:1px solid red;
            padding: 0 15px;
        }
        .header_area{
            display:flex;
            margin:20px 0;
            background:red:
        }
        .header_area img{
            width:45px;
            height: 45px;
            border-radius:50%;
            margin-right:10px;
        }
        .header_area span{
            margin-top:15px;
        }
        .section_area{
            
        }
    </style>
</body>
</html>