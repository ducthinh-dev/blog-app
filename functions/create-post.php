<?php
    if(isset($_POST["create-post"])) {
        $post_id=random_num(20);
        $post_content=$_POST["content"];
        
        $query = "insert into user (userID,username,password) values ('$user_id','$user_name','$password')";

        mysqli_query($connection, $query);
        
    }