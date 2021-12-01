<?php
    if(isset($_POST["create-post"])) {
        $post_id=rand(0, 100);
        $post_content=$_POST["content"];
        //add user here!
        
        $sql="INSERT INTO POST (postID, userID, content) 
        VALUES ({$post_id}, {$user_id}, {$post_content})";

        if ($connection->$query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>