<html lang="en">

<head>
<?php
// configuration
include("../includes/header.php"); 
include("../public/search.php"); 
?>
</head>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <div class="container">
        <div class="container">
            
    <?php while ($row = mysqli_fetch_array($result2)) 
        {

        
       echo "<div class='row'>                    
                <div class='col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0'>
                    <img src=\"../uploads/".$row['picture']."\" height='30%' >
                </div>
              <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1\">
                    <div class='row'><b>Animal Information</b></div><br>
                    <div class='row'><b>Name: </b>".$row['animal_name']."</div>
                    <div class='row'><b>Type: </b>".$row['animal_type']."</div> 
                    <div class='row'><b>Sex: </b>".$row['animal_sex']."</div> 
                    <div class='row'><b>Health: </b>".$row['animal_health']."</div> 
                    <div class='row'><b>Age: </b>".$row['animal_age']."</div>
              </div>
                    <div class=\"col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-1\">
                    <div class='row'><b>Contact Information</b></div><br>
                    <div class='row'><b>City: </b>".$row['post_city']."</div>  
                    <div class='row'><b>Phone: </b>".$row['post_phone']."</div> 
                    <div class='row'><b>email: </b>".$row['post_email']."</div> 
                    <div class='row'><b>Rescue Date: </b>".$row['post_date']."</div> 
                    <form action=\"../public/delete_posts.php\" method=\"post\">
                     <button class=\"btn btn-default\" type=\"submit\" name=\"deleteItem\" value=\"".$row['post_id']."\">Delete Post</button>
                     </form>
              </div>
             </div><br>";
             
        }  

            ?>
                </div>
            </div>
       

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </body>

</html>