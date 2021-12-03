<div class="post">
<!-- GET POST-->
<?php
    $sql="SELECT * FROM POST";
    $get_post=mysqli_query($con, $sql);

    while($posts=mysqli_fetch_assoc($get_post)) {
        $post_ID=$posts['postID'];
        $post_user=$posts['userID'];
        $post_content=$posts['content'];
        //$post_date=$posts['date'];


        // GET username
        $sql="select username from user where userID='$post_user'";
        $result=mysqli_query($con,$sql);
        $get_username=mysqli_fetch_assoc($result);
        $name=$get_username['username'];
        // RENDER POST
        ?>
        <hr><p><?php echo $post_content ?></p><span><?php echo $name ?></span><br>
        <button><a href="functions/delete-post.php?id=<?php echo $post_ID; ?>">Delete</a></button>
        <?php
        // GET COMMENT
        include "get-comment.php";
        // RENDER COMMENT
        include "create-comment.php";
    }
?>
</div>