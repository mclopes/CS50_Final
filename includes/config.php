<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Configures app.
     */

$servername = "localhost";
$username = "project";
$password = "cs50final";
$dbname = "CS50Final";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("functions.php");

    // CS50 Library
    //require("../vendor/library50-php-5/CS50/CS50.php");
    //CS50::init(__DIR__ . "/../config.json");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, and /register.php
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/logout.php", "/register.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

?>
