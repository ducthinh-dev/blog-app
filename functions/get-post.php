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


        //GET username
        $sql="select username from user where userID='$post_user'";
        $result=mysqli_query($con,$sql);
        $get_username=mysqli_fetch_assoc($result);
        $name=$get_username['username'];
        
        // GET POST
        echo "<h3>$name: </h3> <br> 
        <p>$post_content</p> <hr>";
        //GET COMMENT
        include "get-comment.php";
        //COMMENT
        include "create-comment.php";
    }
?>
</div>