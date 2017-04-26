<?php


    require("../includes/config.php"); 

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
    $delete = $_POST['deleteItem'];
    mysqli_query($conn,"DELETE FROM posts WHERE post_id = '$delete' ");
    redirect("../views/user_posts.php");
}


?>