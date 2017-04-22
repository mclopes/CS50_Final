<?php
// configuration
require("../public/post_list_public.php"); 



?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
       
        <table class="striped">
            <tr class="header">
                <td>Picture</td>
                <td>Name</td>
                <td>City</td>
                <td>Phone</td>
                <td>email</td>
                <td>Type</td>
                <td>Sex</td>
                <td>Health</td>
                <td>Age</td>
                <td>Date Posted</td>
                
            </tr>


            <?php

             $src="/..uploads/";
               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr>";
                   echo "<td>"."<img src=\"../uploads/".$row['picture']."\">"."</td>";
                   echo "<td>".$row['animal_name']."</td>";
                   echo "<td>".$row['post_city']."</td>";
                   echo "<td>".$row['post_phone']."</td>";
                   echo "<td>".$row['post_email']."</td>";
                   echo "<td>".$row['animal_type']."</td>";
                   echo "<td>".$row['animal_sex']."</td>";
                   echo "<td>".$row['animal_health']."</td>";
                   echo "<td>".$row['animal_age']."</td>";
                   echo "<td>".$row['post_date']."</td>";
                   echo "</tr>";
               }
           
            ?>
        </table>
    </body>
</html>