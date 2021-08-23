
    <div class="header">
        <div class="logo">
        <i class="fab fa-maxcdn"></i>
        </div>
        <div class="search">
            <input type="text" name="name" id="name" autocomplete="off" placeholder="Enter your search...">
            <div class="result"></div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a></li>
                <li><a href="category.php"><i class="fas fa-upload"></i> Post</a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> Videos</a></li>
            </ul>
        </div>
        <div class="profile_menu">
            <img src="images/<?=$row['img'];?>" alt="">
            <span><a href="profile.php"><?=$login_session;?></a></span>
            <i class="fas fa-bell"></i>
            <a href="logout.php" id="logout">Logout</a>
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


    <style>
        
        *{
            margin:0;
            padding:0;
            outline:0;
        }
        .header{
            padding:15px;
            background:#fff;
        }
        .header::after{
            content:"";
            clear:both;
            display:table;
        }
        .logo{
            float:left;
            width:5%;
            margin:15px 0;
            margin-left:20px;
        }
        .logo i{
            font-size:20px;
            color:#3498db;
        }
        .search{
            float:left;
            width:25%;
            margin:10px 0;
            position: relative;
            display:inline-block;
        }
        .search input{
            width:80%;
            padding:10px;
            border-radius:20px;
            border:1px solid #3498db;
            outline:none;
        }
        .result{
            postion:absolute;
            z-index: 999;
            top:100%;
            left:0;
            margin-left:20px;
        }
        .result{
            width:80%;
            border-sizing:border-box;
            margin-left:-5px
            
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
        .menu{
            float:left;
            width:40%;
        }
        .menu ul{
            display:flex;
            list-style:none;
        }
        .menu ul li a{
            text-decoration:none;
            padding:15px;
            font-size:20px;
            display:block;
        }
        .menu ul li a:hover{
            background:#F2F2F2;
            border-bottom:3px solid #3498db;
            color:#2980b9;
        }
        img{
            width:100%;
        }
        .profile_menu{
            float:right;
            width:25%;
            display:flex;
        }
        .profile_menu img{
            width:45px;
            height:45px;
            border-radius:50%;
            margin-top:5px;
        }
        .profile_menu span{
            margin-top:20px;
            margin-left:5px;
        }
        .profile_menu span a{
            color:#000;
            font-weight:bold;
            text-decoration:none;
            font-size:18px;
        }
        .profile_menu i{
            margin-top:20px;
            margin-left:15px;
        }
        .profile_menu #logout{
            margin-top:10px;
            margin-left:15px;
            padding:10px;
            text-decoration:none;
            border:1px solid #3498db;
            background:#3498db;
            color:#fff;
            border-radius:5px;
        }
    </style>
