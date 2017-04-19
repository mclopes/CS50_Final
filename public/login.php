<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("../views/login_view.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["user_name"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        $user = $_POST["user_name"];
        
        // query database for user
        $rows = mysqli_query($conn, "SELECT * FROM users WHERE user_name = '$user'");
        
        // if we found user, check password
        if (mysqli_num_rows($rows) == 1)
        {
            // first (and only) row
            $row = mysqli_fetch_assoc($rows);
            $password = $row["password"];
            //$result = $row[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $password))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["user_id"];
                //apologize("Yes!".$_SESSION["id"]);

                // redirect to index
                render("../views/map_view.html");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
