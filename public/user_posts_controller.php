<?php
// configuration

 ini_set('display_errors',1); 
 error_reporting(E_ALL);
$session = $_SESSION['id'];

$result1 = mysqli_query($conn,"SELECT * FROM posts WHERE user_id = '$session' ");



$row = mysqli_fetch_array($result1)


?>