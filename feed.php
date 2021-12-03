<?php 
session_start();

	include("functions/connection.php");
	include("functions/functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/feed-style.css" rel="stylesheet">
    <link href="css/post-comment-styles.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
</head>
<body>
    <!-- HEADER -->
    <?php 
        include "assets/header.php";
    ?>
    <!-- CREATE POST -->
    <div class="new-post">
        <form action="feed.php" method="post">
            <textarea name="content" placeholder="Write something.." style="height:200px"></textarea> <br>
            <input type="submit" name="create-post" value="Post">
        </form>
    </div>

    <?php 
        include "functions/create-post.php"
    ?>
    <hr>
    <!-- FEED -->
    <?php include "functions/get-post.php" ?>
    <!-- FOOTER -->
    <?php include "assets/footer.php"?>
</body>
</html>

