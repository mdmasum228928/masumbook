<?php
    include 'session.php';
    include 'connection.php';
    $alert = '';
    if(isset($_POST['category'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $details = $_POST['details'];
        date_default_timezone_set('Asia/Dhaka');
        $date = date('F d \a\t h:ia');

        $sql = "INSERT INTO categories(user_id,title,details,post_time)VALUES('$id','$title','$details','$date')";
        $query = mysqli_query($conn,$sql);
        if($query){
            $alert="<div class='alert alert-danger'>
                        <h3 class='text-right'>You Category Successfully</h3>
                    </div>";
                    header('location:profile.php');
        }
        else{
            $alert="<div class='alert alert-danger'>
                        <h3 class='text-right'>Something went wrong</h3>
                    </div>";
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
        <div class="col-md-4">
            <div class="clearfix">
                <div class="pull-left">
                    <?=$alert;?><br><br>
                    <h1 class="text-black">Add a New Post</h3=1>
                </div>
            </div><br><br>
            <form action="?" method="POST">
                <input type="hidden" name="id" value="<?=$row['id']?>">
                <input type="text" class="form-control" name="title" id="name" placeholder="Enter your post title" required><br><br>
                <textarea class="form-control" placeholder="Enter your post details" name="details" cols="50" rows="4" required></textarea><br><br>
                <button type="submit" class="btn btn-primary btn-lg btn-block form-control" name="category">Submit Your Post</button>
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