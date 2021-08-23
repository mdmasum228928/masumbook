    <div class="web_header">
        <div class="header">
            <div class="user">
                <img src="images/<?=$row['img'];?>" alt="img">
                <span id="username"><?=$login_session;?></span>
            </div>
        </div>
        <div class="other">
            <div class="head">
                <img src="images/<?=$row['img'];?>" alt="">
                <div class="info">
                    <span><?=$row['name'];?></span>
                    <p>View profile</p>
                </div>
            </div>
            <div class="all">
                    <a href="index.php">Home</a>
                    <a href="profile.php">Profile</a>
                    <a href="category.php">Category</a>
                    <a href="logout.php">Logout</a>
                    <a href="#" id="close">Close</a>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#username").click(function(){
                $(".other").show();
            });
            $("#close").click(function(){
                $(".other").hide();
            });
        });
        // js starts 5.19.(+-second)
    $(function(){
    $(window).scroll(function(){
        var scrolling = $(this).scrollTop();
        if(scrolling > 100){
        $(".web_header").addClass("bg");
        }
        else{
        $(".web_header").removeClass("bg");
        }
    });

    });
    </script>

<style>
        body{
            margin:0;
            padding:0;
        }
        img{
            width:100%
        }
        .header{
            overflow:hidden;
            postion:relative;
            padding-bottom:10px;
            background:#e67e22;
        }
        .user{
            display:flex;
            float:right;
            margin-right:30px;
            margin-top:10px;
        }
        .user img{
            width:40px;
            height:40px;
            border-radius:100%;
            margin-right:10px;
        }
        .user span{
            padding-top:10px;
            color:#fff;
            text-decoration:underline;
            cursor:pointer;
        }
        .other{
            overflow:hidden;
            float:right;
            width:20%;
            position:absolute;
            top:45px;
            right:0;
            display:none;
        }
        .head{
            display:flex;
            margin-top:10px;
            background:black;
            padding:20px;
            margin-right:20px;
            color:#fff;
        }
        .head img{
            width:70px;
            height:70px;
            border-radius:100%;
            margin-right:30px;
        }
        .info{
            margin-top:15px;
            
        }
        .info a{
            text-decoration:none;
            color:#fff;
        }
        .all{
            background:#2c3e50;
            margin-right:20px;
        }
        .all a{
            text-decoration:none;
            display:block;
            color:#fff;
            padding:10px 0;
            padding-left:20px;
            font-weight:700;
            border-bottom:1px solid #fff;
            
        }
        a:hover{
            color:#e74c3c;
        }
        .bg{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            border-bottom: 1px solid #DE4644;
            z-index: 9999;
            animation: ebuy 1s;
        }
            @keyframes ebuy{
            from{
                top: -50px;
            }
            to{
                top: 0;
            }
        }
    </style>
