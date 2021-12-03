<?php
    $sql="SELECT comment.content, user.username, comment.date FROM comment, user WHERE comment.userID = user.userID AND comment.postID=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param("s", $post_ID);
    $stmt->execute();
    $get_comment=mysqli_query($connection,$stmt);

    while($comments=mysqli_fetch_assoc($get_comment)) {
        $comment_user=$comments['userID'];
        $comment_content=$comments['content'];
        $comment_date=$comments['date'];

        echo "<h4>$comment_user</h4> <br>
        <div>$comment_content</div> <br>
        <span>$comment_date</span>";
    }
?>
?>