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
    <title>Messenger</title>
    <!-- ================ fontawesome link ============-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- ================ flaticon link ============-->
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/msg.png">
</head>
<body>
    <header id="messenger">
        <!-- ========== messenger left -->
        <section id="messenger_left">
            <div class="user_top">
                <div class="user_left">
                    <img src="images/<?=$row['img'];?>" alt=""> 
                    <h2>Chats</h2>
                </div>
                <div class="user_right">
                    <i class="flaticon-more"></i>
                    <i class="flaticon-video"></i>
                    <i class="flaticon-edit"></i>
                </div>
            </div>
            <!-- 1st section end -->
            <div class="search">
                <input type="search" placeholder="Search Messenger">
            </div>
            <!-- friend list area starts -->
            <div id="friend_area">
                <div class="friend_list_area">
                    <img src="img/shorab.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>Shorab Hossain Shakil</h5>
                        <p>na asai valo </p><span>.5h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/hirdoy.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>RK Hirdoy</h5>
                        <p>Shei na</p><span>.1h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/dider.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>Dider Ahamed</h5>
                        <p>You missed call</p><span>.1h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/hamid.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>MD Hamid</h5>
                        <p>koi aso masum</p><span>.3h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/nisat.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>Parbez Mosharof</h5>
                        <p>Valo</p><span>.1h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/dipu.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>Sarwor Dipu</h5>
                        <p>Ai kalke</p><span>.5h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/hirdoy.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>RK Hirdoy</h5>
                        <p>Shei na</p><span>.1h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/hirdoy.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>RK Hirdoy</h5>
                        <p>Shei na</p><span>.1h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
                <div class="friend_list_area">
                    <img src="img/hirdoy.jpg" alt="">
                    <div class="name_and_chat">
                        <h5>RK Hirdoy</h5>
                        <p>Shei na</p><span>.1h</span>
                    </div>
                    <div class="friend_list_etcicon"><i class="flaticon-more"></i>
                    </div>
                </div> <!--pera end-->
            </div>
            
        </section>


















        <!-- ========== messenger middle =============================-->
        <section id="messenger_middle">
            <div class="profile_area">
                <div class="profile_left">
                    <img src="images/<?=$other['img'];?>" alt="">
                    <div class="profile_name">
                        <h3><?=$other['name'];?></h3>
                        <p>Active Now</p>
                    </div>
                </div>
                <div class="profile_right">
                    <i class="flaticon-phone-call"></i>
                    <i class="flaticon-video-camera"></i>
                    <i class="flaticon-information-button"></i>
                </div>
            </div> <!--====== profile area ends=====-->

            <div class="profile_chat_area">
                <div class="left_friend_list_message">
                    <div class="profile_chat_write">
                        <img src="img/shorab.jpg" alt="chat-img">
                        <p>basai thakos ken sarakon</p>
                    </div>
                    <div class="profile_emoji">
                        <i class="flaticon-smile"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-more-1"></i>
                    </div>
                </div> <!--===== profile friend_list_message_end =====-->
                <div class="right_my_send_message">
                    <div class="profile_my_message">
                        <p>akhon sokal porjonto kormo</p>
                    </div>
                    <div class="profile_emoji_right">
                        <i class="flaticon-more-1"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-smile"></i>
                    </div>
                </div> <!-- ============= right_my_send_message ends =========-->

                <div class="left_friend_list_message">
                    <div class="profile_chat_write">
                        <img src="img/shorab.jpg" alt="chat-img">
                        <p>Kire ki khobor</p>
                    </div>
                    <div class="profile_emoji">
                        <i class="flaticon-smile"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-more-1"></i>
                    </div>
                </div> <!--===== profile friend_list_message_end =====-->
                <div class="right_my_send_message">
                    <div class="profile_my_message">
                        <p>valo</p>
                    </div>
                    <div class="profile_emoji_right">
                        <i class="flaticon-more-1"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-smile"></i>
                    </div>
                </div> <!-- ============= right_my_send_message ends =========-->
                <div class="left_friend_list_message">
                    <div class="profile_chat_write">
                        <img src="img/shorab.jpg" alt="chat-img">
                        <p>ki koros</p>
                    </div>
                    <div class="profile_emoji">
                        <i class="flaticon-smile"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-more-1"></i>
                    </div>
                </div> <!--===== profile friend_list_message_end =====-->
                <div class="right_my_send_message">
                    <div class="profile_my_message">
                        <p>gomai. tui ki koros</p>
                    </div>
                    <div class="profile_emoji_right">
                        <i class="flaticon-more-1"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-smile"></i>
                    </div>
                </div> <!-- ============= right_my_send_message ends =========-->
                <div class="left_friend_list_message">
                    <div class="profile_chat_write">
                        <img src="img/shorab.jpg" alt="chat-img">
                        <p>Pore kotha komo..akn dukane jasci</p>
                    </div>
                    <div class="profile_emoji">
                        <i class="flaticon-smile"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-more-1"></i>
                    </div>
                </div> <!--===== profile friend_list_message_end =====-->
                <div class="right_my_send_message">
                    <div class="profile_my_message">
                        <p>ok</p>
                    </div>
                    <div class="profile_emoji_right">
                        <i class="flaticon-more-1"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-smile"></i>
                    </div>
                </div> <!-- ============= right_my_send_message ends =========-->
                <div class="left_friend_list_message">
                    <div class="profile_chat_write">
                        <img src="img/shorab.jpg" alt="chat-img">
                        <p>Freelancer er moto mone hosce</p>
                    </div>
                    <div class="profile_emoji">
                        <i class="flaticon-smile"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-more-1"></i>
                    </div>
                </div> <!--===== profile friend_list_message_end =====-->
                <div class="right_my_send_message">
                    <div class="profile_my_message">
                        <p>table ay light lagaisi
                        </p>
                    </div>
                    <div class="profile_emoji_right">
                        <i class="flaticon-more-1"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-smile"></i>
                    </div>
                </div> <!-- ============= right_my_send_message ends =========-->
                <div class="left_friend_list_message">
                    <div class="profile_chat_write">
                        <img src="img/shorab.jpg" alt="chat-img">
                        <p>basai thakos ken sarakon</p>
                    </div>
                    <div class="profile_emoji">
                        <i class="flaticon-smile"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-more-1"></i>
                    </div> 
                </div> <!--===== profile friend_list_message_end =====-->
                <div class="right_my_send_message">
                    <div class="profile_my_message">
                        <p>amnai</p>
                    </div>
                    <div class="profile_emoji_right">
                        <i class="flaticon-more-1"></i>
                        <i class="fas fa-reply"></i>
                        <i class="flaticon-smile"></i>
                    </div>
                </div> <!-- ============= right_my_send_message ends =========-->
            </div>
            <!-- ========================================= profile_chat_area ends ============== -->

            <div class="profile_send_area">
                <form action="?">
                    <div class="profile_send_middle">
                        <input type="text" name="search" placeholder="Aa">
                        <input type="submit" value="send">
                    </div>
                </form>
            </div>
        
        </section>





        <!-- ========== messenger right =============================-->
        <section id="messenger_right"></section>
    </header>













    <script src="js/script.js"></script>
</body>
</html>