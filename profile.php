<?php
    include 'session.php';
    include 'connection.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);
        $query = "UPDATE user SET img='$image' WHERE id ='$id'";
        $sql = mysqli_query($conn,$query);

        if($query){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                echo "successful";
            }
            else{
                echo "not Succesful";
            }
            header('location:profile.php');
        }
        else{
            echo "<script>alert('something went wrong')</script>".mysqli_error($conn);
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
    <?php include 'addfile/fontawesome.php';?>
    

</head>
<body>
    <?php include 'home.php';?>
    <div class="profile_area">
        <div class="profile_photo">
            <img src="images/<?=$row['img'];?>" alt="">
            <span id="myBtn">Change Image</span><br><br>
            <div class="name">
                <span class="title">Name : </span><span><?=$row['name'];?></span>
            </div>
            <div class="name">
                <span class="title">Email : </span><span><?=$row['email'];?></span>
            </div>
        </div>
    </div>
    <table>
        <div class="site">
            <div class="edit">
                <a href="proedit.php"><i class="fas fa-pen"></i> Edit Profile</a>
            </div>
            <div class="posted">
                <a href="category.php"> 
                    <div class="post">POST</div>
                </a>
            </div>
            <?php 
                $id = $row['id'];
                $sql = "SELECT * FROM categories WHERE user_id = $id";
                $query = mysqli_query($conn,$sql);
                if($query){
                    if(mysqli_num_rows($query)>0){
                        while($paste=mysqli_fetch_assoc($query)){
        
            ?>
            <div class="singel_create">
                <div class="user_profile">
                    <div class="user_info">
                        <img src="images/<?=$row['img'];?>" alt="">
                        <div class="name_date">
                            <a href="#"><span><?=$row['name'];?></span></a>
                            <span class="date"><?=$paste['post_time'];?></span>
                        </div>
                    </div>
                    <div class="updating">
                        <a href="edit.php?id=<?=$paste['id'];?>">Edit</a>
                        <a href="delete.php?id=<?=$paste['id'];?>">Delete</a>
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

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="?" method="POST" enctype="multipart/form-data">
        <label>Change Your Image</label><br><br>
        <img src="images/<?=$row['img'];?>" alt="">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        <label for="image">Select Your Image</label><br><br>
        <input type="file" id="image" name="image" required><br><br>
        <input type="submit" name="submit" value="Update Profile">
    </form>
  </div>

</div>

<script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
<style>
    body{
        background:#F0F2F5;
    }
    input[type=submit]{
        padding:10px;
        margin:10px 0 10px 35%;
        background:#3498db;
        border:none;
        outline:none;
        color:#fff;
    }
    input[type=submit]:hover{
        background:#2980b9;
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
    #myBtn{
        color: #3498db;
        cursor:pointer;
    }
    #myBtn:hover{
        text-decoration:underline;
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
    .edit{
        margin-bottom:20px;
        display:flex;
        justify-content:flex-end;
    }
    .edit a{
        background:#3498db;
        padding:10px;
        color:#fff;
        text-decoration:none;
        font-weight:700;
        border-radius:5px;
    }
    .edit a i{
        color:#fff;
        padding-right:5px;
    }
    .edit a:hover{
        background:#2980b9;
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
    .user_info{
        width:80%;
        display:flex;
    }
    .updating{
        width:20%;
    }

    .updating a{
       text-decoration:none;
       color:black;
       padding:5px;
       background:#3498db;
       trasition: .3s;
       color:#fff;
       border-radius:5px;
    }
    .updating a:nth-child(2){
        background:red;
    }
    .updating a:hover{
        text-decoration:underline;
        background:#0B5ED7;
    }
    .updating a:hover:nth-child(2){
        text-decoration:underline;
        background:#e74c3c;
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
    /* modal css starts */

    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

    /* modal css end */
    form{
        
    }
    form label{
        font-size:20px;
    }
    form label,form input{
        margin-left:35%;
    }
    form img{
        margin-left:35%;
        width:150px;
        height:150px;
        border-radius:50%;
    }

</style>