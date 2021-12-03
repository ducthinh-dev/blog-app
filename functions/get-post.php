<div class="post">
<!-- GET POST-->
<?php
    $sql="SELECT * FROM POST";
    $get_post=mysqli_query($connection, $sql);

    while($posts=mysqli_fetch_assoc($get_post)) {
        $post_user=$posts['userID'];
        $post_content=$posts['content'];
        $post_ID=$posts['postID'];

        echo "<h3>$post_user</h3> <br>
        <div>$post_content</div> <hr>";
        //GET COMMENT
        include "get-comment.php";
    }
?>
</div>
</div>