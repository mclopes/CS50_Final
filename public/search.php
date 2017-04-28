<?php

    // configuration
    require("../includes/config.php");


   // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        redirect("..index.php");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            // create a variable
            
            $type;
            $sex;
            $health;
            $age;
            
            if(isset($_POST['type']))
            {
                $type = " = '".$_POST['type']."' ";
            }
            else
            {
                $type = " IS NOT NULL ";
            }

            if(isset($_POST['sex']))
            {
                $sex = " = '".$_POST['sex']."' ";
            }
            else
            {
                $sex = " IS NOT NULL ";
            }

            if(isset($_POST['health']))
            {
                $health = " = '".$_POST['health']."' ";
            }
            else
            {
                $health = " IS NOT NULL ";
            }

            if(isset($_POST['age']))
            {
                $age = " = '".$_POST['age']."' ";
            }
            else
            {
                $age = " IS NOT NULL ";
            }

            $query = "SELECT * FROM posts WHERE animal_type" .$type. "AND animal_sex" .$sex. "AND animal_health". $health. "AND animal_age".$age;
            //echo($query);

            $result2 = mysqli_query($conn, $query);

            $row = mysqli_fetch_array($result2);
                
            
            // FOR TESTING PURPOSES
            while ($row = mysqli_fetch_array($result2))
            {echo($row['animal_name']);}
            
            
            
            redirect("../views/search_results.php");   
        
        
    }
    














?>