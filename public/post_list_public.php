<?php
// configuration
require("../includes/config.php"); 


$result = mysqli_query($conn,"SELECT * FROM posts");

$row = mysqli_fetch_array($result)


?>