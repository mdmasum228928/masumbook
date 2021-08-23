<?php
    include 'connection.php'; 
    $email_check = '';

    if(isset($_POST['upload'])){ 
        $name = $_POST['name'];    
        $email = $_POST['email'];    
        $password = $_POST['password']; 
        $create_date = date('F Y');  
        $img = $_FILES['image']['name']; 
        $email_exist = "SELECT email From user WHERE email='$email'";
        $query = mysqli_query($conn,$email_exist);
        
        if(mysqli_num_rows($query)>0){
            $email_check = "Your Email is already exaist";
        }
        else{
                // echo $img;  
            $target = "images/".basename($img);
            $query =   "INSERT INTO user(name,email,password,img,create_date) VALUES ('$name','$email','$password','$img','$create_date')";
            $sql = mysqli_query($conn,$query); 

            if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){  
                echo "Successfull";    
            }
            else{  
                echo "Not  Successfull";   
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
    <title>Signup</title>
</head>
<body>
    
    <form action="signup.php" method="POST" enctype="multipart/form-data">
        <h2>Register your account</h2>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <input type="email" name="email" placeholder="Enter your email" required><br>
        <span><?=$email_check;?></span><br>
        <input type="password" name="password" placeholder="Enter your password" required><br><br>
        <input type="file" name="image" required><br><br>
        <input type="submit" value="Register" name="upload">
    </form>
    
</body>
</html>