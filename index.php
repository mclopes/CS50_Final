

<html lang="en">

<head>
    <?php
// configuration
include("public/post_list_public.php"); 

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!-- https://jquery.com/ -->
        <script src="public/js/jquery-1.11.3.min.js"></script>
        <script src="public/js/scripts.js"></script>
</head>


<body>
     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>CS50 Final</h1>
                        <hr class="small">
                        <span class="subheading">Helping Stray Animals</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGPguDR_tDrCsix6uGms1fjDSsfM0nxIQ&callback=initialize">
    </script>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    
                        <h2 class="post-title">  Shelters  </h2>
                        <div id="map" style="border: 2px solid #3872ac;"></div>
                </div>
               
            </div>
            <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
            <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    
                        <h2 class="post-title">  Animals  </h2>
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

             
               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr>";
                   echo "<td>"."<img src=\"uploads/".$row['picture']."\">"."</td>";
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
                </div>
               
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
         
       
     
    
 
   
</body>

</html>