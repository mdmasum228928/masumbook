<?php
    include 'connection.php';
    if(isset($_GET['id'])){
        $sql = "DELETE FROM categories WHERE id =".$_GET['id'];
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:profile.php');
        }
        else{
            echo "<script>alert('something went wrong')</script>".mysqli_error($conn);
        }
    }
?>