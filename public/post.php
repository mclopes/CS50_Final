<?php

    // configuration
    require("../includes/config.php"); 

        if((empty($_POST["post_name"]) || 
            empty($_POST["post_city"]) || 
            empty($_POST["post_phone"])))
         {
            apologize("Please fill out all info");
         }
        else
        {
            // create a variable
            $post_name=$_POST['post_name'];
            $post_city=$_POST['post_city'];
            $post_phone=$_POST['post_phone'];
            $post_email=$_POST['post_email'];
            //IMAGE
            $animal_type=$_POST['type'];
            $animal_sex=$_POST['sex'];
            $animal_name=$_POST['animal_name'];
            $animal_health=$_POST['health'];
            $animal_age=$_POST['age'];


        //Execute the query
 
             mysqli_query($conn,"INSERT INTO posts (post_name, post_city, post_phone, post_email, animal_type, animal_sex, animal_name, animal_health, animal_age)
				                    VALUES('$post_name','$post_city','$post_phone','$post_email','$animal_type','$animal_sex','$animal_name','$animal_health','$animal_age')");

        }


        





    // if ($_FILES["image"]["error"] > 0)
    // {
    //     apologize("No image selected");
    // }
    // else
    // {
    //     move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/" . $_FILES["image"]["name"]);
    //     //echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

    //     $file="../public/images/".$_FILES["image"]["name"];
    //     $sql="INSERT INTO posts (user_id, post_name, post_city, post_phone, post_email, picture, animal_type, animal_health) 
    //            VALUES ('$_SESSION["id"]', 'post1','city1','123','pa@gmail.com', '$file', 'dog', 'good')";

    //     if (!mysql_query($sql))
    //     {
    //         die('Error: ' . mysql_error());
    //     }
    //     echo "<font size = '5'><font color=\"#0CF44A\">SAVED TO DATABASE";

    //}

   //mysql_close();

?>