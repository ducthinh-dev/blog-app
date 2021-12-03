<?php
    if(isset($_POST["create-post"])) {
        $post_id=rand(0, 100);
        $post_content=$_POST["content"];
        $post_date=date('Y-m-d H:i:s');
        //add user here!
        
        $sql="INSERT INTO POST (postID, userID, content, date) 
        VALUES ({$post_id}, {$user_id}, {$post_content}, {$post_date})";

        if ($connection->$query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>