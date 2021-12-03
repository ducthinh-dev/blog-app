<div class="post">
<!-- GET POST-->
<?php
    $sql="SELECT * FROM POST";
    $get_post=mysqli_query($connection, $sql);

    while($posts=mysqli_fetch_assoc($get_post)) {
        $post_user=$posts['userID'];
        $post_content=$posts['content'];
        $post_ID=$posts['postID'];
        $post_date=$posts['date'];

        echo "<h3>$post_user</h3> <h4> $post_date</h4> <br>
        <p>$post_content</p> <hr>";
        //GET COMMENT
        include "get-comment.php";
        //COMMENT
        include "create-comment.php";
    }
?>
</div>