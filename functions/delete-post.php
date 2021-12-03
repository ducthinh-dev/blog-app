<?php

include "connect-db.php";

$id = $_GET['id'];

if($user_data['userID'] === $post_user)
{
    $del = mysqli_query($con,"delete from post where postID = '$id'");
    header("location: ../feed.php");
    die;
}else
{
    header("location: ../feed.php");
    die;
}

?>