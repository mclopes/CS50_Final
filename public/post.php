<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("../views/post_upload.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    { 

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
            $file = "123";
            $animal_type=$_POST['type'];
            $animal_sex=$_POST['sex'];
            $animal_name=$_POST['animal_name'];
            $animal_health=$_POST['health'];
            $animal_age=$_POST['age'];
            $post_date=date("m/d/Y");



            if($_FILES['file']['tmp_name']!= "")
            {    
                
                $file = rand(1000,100000)."-".$_FILES['file']['name'];
                $file_loc = $_FILES['file']['tmp_name'];
                $file_size = $_FILES['file']['size'];
                $file_type = $_FILES['file']['type'];
                $folder="../uploads/";
                
                move_uploaded_file($file_loc,$folder.$file);        
            }

       
            // else
            // {
            //     $file = NULL;
            // }
            

        //Execute the query
          mysqli_query($conn,"INSERT INTO posts (post_name, post_city, post_phone, post_email, picture, animal_type, animal_sex, animal_name, animal_health, animal_age, post_date)
				                    VALUES('$post_name','$post_city','$post_phone','$post_email','$file','$animal_type','$animal_sex','$animal_name','$animal_health','$animal_age','$post_date')");
 
        }
    }



?>