 <meta charset="utf-8">
     <?php
// configuration
include("../includes/config.php"); 
error_reporting(E_ALL ^ E_NOTICE);
?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!-- https://jquery.com/ -->
        <script src="../public/js/jquery-1.11.3.min.js"></script>
        <script src="../public/js/scripts.js"></script>
<body>
        <header class="intro-header" style="background-image: url('../img/home-bg.jpg')">
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


     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav                        navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <?php

                        //this checks to see if the variable isset and not null, if it is not set or is null then echo 'none';
                        if ($_SESSION["id"] == FALSE)
                        {
                            echo "<li><a href='login_view.php'>Login/Register</a></li>";
                        }
                        else
                        {
                           echo "<li><a href='post_upload.php'>Found An Animal?</a></li>";
                           echo "<li><a href='user_posts.php'>My Posts</a></li>";
                           echo "<li><a href='../public/logout.php'>Logout</a></li>";
                        }
                        
                        ?>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>    