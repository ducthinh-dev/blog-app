<?php
    if(isset($_POST["create-comment"])) {
        $comment_content=$_POST["comment-content"];
        
        $id=$user_data['userID'];
        $query = "insert into comment (postID,userID,content) values ('$post_ID','$id','$comment_content')";

        mysqli_query($con, $query);

    }
?>
<div class="new-comment">
        <form action="feed.php" method="post">
            <textarea name="comment-content" placeholder="Write comment" style="height: 30px"></textarea> <br>
            <input type="submit" name="create-comment" value="Comment">
        </form>
</div>