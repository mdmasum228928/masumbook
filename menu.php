<div class="header_area">
        <div class="left">
            <div class="logo"><i class="fab fa-maxcdn"></i></div>
            <div class="search">
                <input type="text" id="name" autocomplete="off" placeholder="Search masum...">
                <div class="result"></div>
            </div>
        </div>
        <div class="middle">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
            <a href="category.php"><i class="fas fa-upload"></i> Post</a>
            <a href="#"><i class="fas fa-rss"></i> Other</a>
        </div>
        <div class="right">
            <div class="profile">
                <a href="profile.php">
                    <img src="images/<?=$row['img'];?>" alt="">
                    <span><?=$login_session;?></span>
                </a>
                <i class="fas fa-bell"></i>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#name').on('keyup input',function(){

            var value = $(this).val();
            var result = $(this).siblings(".result");
            if(value.length){
                $.post("search-backend.php", {term:value}).done(function(data){
                   result.html(data); 
                });
            }
            else{
                result.empty();
            }
        });
        $(document).on('click','.result p', function(){
            $(this).parents(".search").find("#name").val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    </script>
    <script>
        $(function(){
        $(window).scroll(function(){
            var scrolling = $(this).scrollTop();
            if(scrolling > 0){
                $(".header_area").addClass("bg");
            }
            else{
            $(".header_area").removeClass("bg");
            }
        });
    });
    </script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: #F0F2F5;
        }
        .header_area{
            display:flex;
            background: #fff;
            padding: 5px 0;
        }
        .left{
            width: 30%;
            display: flex;
            
        }
        .logo i{
            color: #E67E22;
            margin: 15px 20px 20px 20px;
            font-size: 30px;
            color: #1877F2;
        }
        .search{
            width: 240px;
            position: absolute;
            display:inline-block;
            margin-left:50px;
        }
        .search input{
            padding: 10px 10px;
            outline: none;
            margin: 12px 15px;
            border-radius: 20px;
            width: 220px;
            background: #F0F2F5;
            border: 1px solid #F0F2F5;
            font-size: 16px;
        }
        .result{
            postion:relative;
            z-index: 999;
            top:100%;
            left:0;
            margin-left:20px;
        }
        .search input, .result{
            width:100%;
            border-sizing:border-box;
        }
        .result p{
            margin:0;
            padding:7px 10px;
            border:1px solid #cccccc;
            border-top:none;
            cursor:pointer;
        }
        .result p:hover{
            background:#f2f2f2;
        }
        .middle{
            width:45%;
            display: flex;
        }
        .middle a{
            text-decoration: none;
            margin: 5px 25px;
            padding: 10px 15px;
            display: block;
            font-weight: 600;
            transition: .4s;
        }
        .middle a i{
            font-size: 25px;
        }
        .middle a:hover{
            background: #F2F2F2;
            color: #1877F2;
            border-bottom:4px solid #1877F2;
        }
        .right{
            width: 25%;
            margin: 5px 0;
            display: flex;
        }
        .profile{
            display: flex;
        }
        .profile a{
            display: flex;
            text-decoration: none;
        }
        .profile a span{
            margin-top: 15px;
            font-weight: bold;
            color: #000;
        }
        .profile a span:hover{
            text-decoration: underline;
        }
        .profile img{
            width: 50px;
            height:50px;
            border-radius: 100%;
            margin-right: 10px;
        }
        .profile i{
            margin: 15px;
            font-size: 20px;
        }
        .bg{
            position: fixed;
            background: #ffffff;
            top: 0;
            left: 0;
            width: 100%;
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