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
            {
              //$msg = "Thanks for signing up for our service!";
              $rows =  mysqli_query($conn,"SELECT LAST_INSERT_ID() AS id");
              if (mysqli_num_rows($rows) > 0)
              {
                  $row = mysqli_fetch_assoc($rows);
                  $id = $row["id"];
                  $_SESSION["id"] = $id; 
              }
              else
              {
                  apologize(":(");
              }

              if ($is_shelter === 1)
              {
                  $capacity = $_POST['capacity'];
                  $availability = $_POST['availability'];
                  $type = $_POST['type']; 
                  $address_number = $_POST['address_number'];
                  $address_street = $_POST['address_street'];
                  $address_city = $_POST['address_city'];
                  $address_province = $_POST['address_province'];
                  $address_postal_code = $_POST['address_postal_code'];

                  
                //   apologize("avilab: ".$availability."type: ".$type."ad num: ".$address_number."street: ".$address_street."city: ".$address_city."province: ".$address_province."CP: ".$address_postal_code."user id: ".$id."capacity: ".$capacity);
                  
                  
                  $result2 = mysqli_query($conn,"INSERT INTO shelters (capacity, availability, type, user_id)
				                    VALUES('$capacity','$availability','$type','$id')");
                
                    if($result2 === false)
                    {
                        apologize("no shelter");
                    }
                    else
                    {
                        $rows_shelter =  mysqli_query($conn,"SELECT LAST_INSERT_ID() AS shelter_id");
                        if (mysqli_num_rows($rows_shelter) > 0)
                        {
                            $row_shelter = mysqli_fetch_assoc($rows_shelter);
                            $id_shelter = $row_shelter["shelter_id"];
                        // $_SESSION["shelter_id"] = $id_shelter; 
                        }

                        //Error checkin
                        // if (!mysqli_query($conn,"INSERT INTO shelter_address (shelter_id, address_number,address_street, address_city, address_province, address_postal_code)
                        //--                 VALUES('$id_shelter', $address_number','$address_street','$address_city','$address_province', '$address_postal_code')"))
                        // {
                        //     echo("Error description: " . mysqli_error($conn));
                        // }

                        
                        $result3 = mysqli_query($conn,"INSERT INTO shelter_address (shelter_id, address_number,address_street, address_city, address_province, address_postal_code)
                                         VALUES('$id_shelter', $address_number','$address_street','$address_city','$address_province', '$address_postal_code')");   

                    
                       
                       
                        apologize("ad num: ".$address_number." street: ".$address_street." city: ".$address_city." province: ".$address_province." CP: ".$address_postal_code." id shelter: ".$id_shelter);
                        
                        if($result3 === false)
                        {
                            apologize("no address");
                        }                  
                    }               
              }
            }
                
              redirect("../views/register_view.php");   
        }
        
    }

?>