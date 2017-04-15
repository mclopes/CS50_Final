<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("../views/register_view.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if((empty($_POST["user_name"]) || 
        empty($_POST["password"]) || 
        empty($_POST["confirmation"])) || 
        ($_POST["password"] !== $_POST["confirmation"]))
        {
          apologize("Please try again.");
        }
        else
        {
            // create a variable
            $name=$_POST['user_name'];
            $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email=$_POST['email'];
            $is_shelter;
            if(isset($_POST['is_shelter']))
            {
                $is_shelter = 1;
            }
            else
            {
                $is_shelter = 0;
            }

            //Execute the query
 
            $result = mysqli_query($conn,"INSERT INTO users (user_name, password, email, is_shelter)
				                    VALUES('$name','$password','$email','$is_shelter')");

            

            //CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            if($result === false)
            {
              apologize("Couldn't be saved to database");
            }
            else
              $msg = "Thanks for signing up for our service!";
              $rows =  mysqli_query($conn,"SELECT LAST_INSERT_ID() AS id");
              if (mysqli_num_rows($rows) > 0)
              {
                  $row = mysqli_fetch_assoc($rows);
                  $id = $row["id"];
                  $_SESSION["id"] = $id; 
                  apologize($_SESSION["id"]);
              }
              else{
                  apologize(":(");
              }
                
              redirect("../views/register_view.php");   
        }
        
    }

?>