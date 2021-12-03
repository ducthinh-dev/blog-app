<div class="comment">
<?php
    $sql="SELECT comment.content, user.username, comment.date FROM comment, user WHERE comment.userID = user.userID AND comment.postID='$post_ID'";
    $get_comment=mysqli_query($con,$sql);

    while($comments=mysqli_fetch_assoc($get_comment)) {
        $comment_user=$comments['userID'];
        $comment_content=$comments['content'];
        $comment_date=$comments['date'];

        echo "<h4>$comment_user: </h4><p>$comment_content</p> <br>
        <span>$comment_date</span>";
    }
?>
</div>