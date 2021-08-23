<?php
    include 'connection.php';

    if(isset($_REQUEST['term'])){
        $sql = "SELECT * FROM user WHERE name LIKE ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,"s",$param_term);

            $param_term = $_REQUEST["term"]."%";
            $query = mysqli_stmt_execute($stmt);
            if($query){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo "<p>".$row['name']."</p>";
                    }
                }
                else{
                    echo "<p>NO MATCHES FOUND</p>";
                }
            }
        }
    }
?>