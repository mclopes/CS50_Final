<?php

    // configuration
    require("../includes/config.php"); 

    if ($_FILES["image"]["error"] > 0)
    {
        apologize("No image selected");
    }
    else
    {
        move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/" . $_FILES["image"]["name"]);
        //echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

        $file="../public/images/".$_FILES["image"]["name"];
        $sql="INSERT INTO posts (user_id, post_name, post_city, post_phone, post_email, picture, animal_type, animal_health) 
                VALUES ('$_SESSION["id"]', 'post1','city1','123','pa@gmail.com', '$file', 'dog', 'good')";

        if (!mysql_query($sql))
        {
            die('Error: ' . mysql_error());
        }
        echo "<font size = '5'><font color=\"#0CF44A\">SAVED TO DATABASE";

    }

   //mysql_close();

?>