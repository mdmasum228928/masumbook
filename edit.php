<?php
    include 'connection.php';
    include 'session.php';
    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $details = $_POST['details'];
        $id = $_POST['id'];
        date_default_timezone_set('Asia/Dhaka');
        $date = date('F d \a\t h:ia');
        $sql = "UPDATE categories SET title='$title',details='$details',post_time='$date' WHERE id ='$id'";
        $query = mysqli_query($conn,$sql);

        if($query){
            header('location:profile.php');
        }
        else{
            "<scipt>alert('something went wrong')</script>".mysqli_error($conn);
        }
    }

    $id = '';
    $title = '';
    $details = '';
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM categories where id =".$_GET['id'];
        $query = mysqli_query($conn,$sql);

        if($query){
            if(mysqli_num_rows($query)>0){
                while($edit=mysqli_fetch_assoc($query)){
                    $id = $edit['id'];
                    $title = $edit['title'];
                    $details = $edit['details'];
                }
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
    <?php include 'addfile/fontawesome.php';?>
</head>
<body>
    <?php include 'home.php';?>
    <br><br>
    <div class="row">
        <div class="col-md-4" style="margin:0 auto;">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Edit Your Post</h1>
                </div>
            </div><br><br>
            <form action="?" method="POST">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="text" class="form-control" name="title" id="name" placeholder="Enter your category name" required value="<?=$title?>"><br><br>
                <textarea class="form-control" placeholder="Enter your post details" name="details" cols="50" rows="4" required><?=$details?></textarea><br><br>
                <button type="submit" class="btn btn-primary btn-lg btn-block form-control" name="update">Update Your Information</button>
            </form>
        </div>
    </div>
</body>
</html>
<style>
   body{
        background:#F0F2F5;
    }
    form input{
        width:350px;
        padding:10px;
        font-size:20px;
    }
    form textarea{
        width:350px;
        padding:10px;
        font-size:16px;
    }
    form button{
        width:350px;
        padding:10px;
        background:#3498db;
        color:#fff;
        border:none;
        outline:none;
        font-size:20px;
    }
    .row{
        display:flex;
        justify-content:center;
    }
</style>