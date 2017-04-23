<?php
 ini_set('display_errors',1); 
 error_reporting(E_ALL);
// configuration
require("includes/config.php"); 


$result = mysqli_query($conn,"SELECT * FROM posts");

$row = mysqli_fetch_array($result)


?>