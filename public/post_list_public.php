<?php
// configuration
require("includes/config.php"); 

 ini_set('display_errors',1); 
 error_reporting(E_ALL);


$result = mysqli_query($conn,"SELECT * FROM posts");

$row = mysqli_fetch_array($result)


?>