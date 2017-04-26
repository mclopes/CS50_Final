<?php


include("../views/user_posts.php");
$post_id = $row['post_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   mysqli_query($conn,"DELETE FROM posts WHERE post_id = '$post_id' ");
}

redirect("../views/user_posts.php");
?>