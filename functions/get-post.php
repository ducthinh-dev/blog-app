<?php
    $sql="SELECT * FROM POST";
    $get_post=mysqli_query($connection, $sql);

    while($posts=mysqli_fetch_assoc($get_post)) {
        $post_user=$posts['userID'];
        $post_content=$posts['content'];

        echo "<h3>$post_user</h3> <br>
        <div>$post_content</div> <hr>";
    }
?>