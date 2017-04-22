<?php

// configuration
require("../includes/config.php"); 


    $places = [];
    $geocodes = [];

    // Select all the rows in the markers table
    $result = mysqli_query($conn,"SELECT * FROM shelter_address");
    if (!$result) {
    die('Invalid query: ' . mysql_error());
    }

    // Select all the rows in the markers table
    $result2 = mysqli_query($conn,"SELECT shelter_address.*, shelters.*, users.user_name  
                                    FROM shelter_address, shelters, users
                                    WHERE shelter_address.shelter_id = shelters.shelter_id
                                    AND shelters.user_id = users.user_id");
    if (!$result2) {
    die('Invalid query: ' . mysql_error());
    }

    
    
    //$places = $result
    
    // while ($row = @mysqli_fetch_assoc($result))
    // {
  
    //     $address = ($row['address_number']." ".$row['address_street']." " . $row['address_city'] ." ". $row['address_province'] ." ". $row['address_postal_code']);
    //     //echo $address;
    //     //array_push($places, $address);
    //     $temp = geocode($address);
    //     $temparray = [];
    //     $temparray["lat"] = $temp[0];
    //     $temparray["long"] = $temp[1];
    //     $temparray["address"] = $temp[2];
        
    //     array_push($geocodes, $temparray);
    // }



    while ($row = @mysqli_fetch_assoc($result2))
    {
  
        $address = ($row['address_number']." ".$row['address_street']." " . $row['address_city'] ." ". $row['address_province'] ." ". $row['address_postal_code']);
        //echo $address;
        //array_push($places, $address);
        $temp = geocode($address);
        $temparray = [];
        $temparray["lat"] = $temp[0];
        $temparray["long"] = $temp[1];
        $temparray["address"] = $temp[2];
        //echo "cap ".." type ". $row['type'];
        $temparray["capacity"] = $row['capacity'];
        $temparray["availability"] = $row['availability'];
        $temparray["type"] = $row['type'];
        $temparray["phone"] = $row['phone'];
        $temparray["user_name"] = $row['user_name'];
        
        array_push($geocodes, $temparray);
        //$geocodes["capacity"] = 
    }
    
    //echo $address;

    //$latlong = geocode($address);

    // output result as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    
    //print(json_encode($places, JSON_PRETTY_PRINT));

    print(json_encode($geocodes, JSON_PRETTY_PRINT));

    


    // if($latlong == FALSE)
    // {
    //     echo "No sirve";
    // }
    // else
    // {
    //     echo $latlong['0'];
    //     echo $latlong['1'];
    //     echo $latlong['2'];
    // }
    
    //render("../views/map_view2.php", ["title" => "Shelters", "latlong" => $latlong]);
    //echo($result);
    //$latlong = getLatlong($result)

?>