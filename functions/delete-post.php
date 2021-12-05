<?php

include "connect-db.php";

$id = $_GET['id'];
$post_user = $_GET['user_id'];
$current_user = $_GET['userID'];

if($current_user === $post_user)
{
    mysqli_query($con,"delete from post where postID = '$id'");
    mysqli_query($con, "delete from comment where postID = '$id'");
    
    header("location: ../feed.php");
    die;
}else
{
    echo "Cannot delete other's posts!";
    die;
}

?>