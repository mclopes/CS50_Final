

<html lang="en">

<head>
    <?php
// configuration
include("../includes/header.php"); 
?>   
</head>



     <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    
       <div class="container"> <div class="container">
            <div class="row">
                <div class="col-lg-5  col-md-5">
                    <div class="post-preview">
                        <h2 class="post-title">  Rescued Animal  </h2>
                          <form enctype="multipart/form-data" action="../public/post.php" method="post" name="changer">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="post_name" placeholder="name" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="post_city" placeholder="city" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="post_phone" placeholder="phone" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="post_email" placeholder="email" type="text"/>
        </div>
        </div>
        </div>
         <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1">
             <br>
        <label for="type"> Type of Animal:</label>
            <div class="form-group"  >       
                <div class="col-md-4 col-lg-2"> <input type="radio" name="type" value="dog" checked> Dog</div>
                <div class="col-md-4 col-lg-2"> <input class="col-md-4 col-lg-4" type="radio" name="type" value="cat"> Cat</div>
                <div class="col-md-4 col-lg-3"> <input class="col-md-4 col-lg-4" type="radio" name="type" value="mixed"> Mixed </div><br>
            </div>
            <label for="sex"> Sex of Animal:</label>
        <div class="form-group">
            <div class="col-md-4 col-lg-2"><input type="radio" name="sex" value="male" checked> M</div>
            <div class="col-md-4 col-lg-2"><input type="radio" name="sex" value="female"> F</div>
            <div class="col-md-4 col-lg-4"><input type="radio" name="sex" value="unknown"> Unknown</div><br>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="animal_name" placeholder="Animal Name" type="text"/>
        </div>
        <label for="health"> Health of Animal:</label>
        <div class="form-group">
            <div class="col-md-4 col-lg-3"><input type="radio" name="health" value="good" checked> Good</div>
            <div class="col-md-4 col-lg-2"><input type="radio" name="health" value="bad"> Bad</div>
            <div class="col-md-4 col-lg-5"><input type="radio" name="health" value="unknown"> Unknown</div><br>
        </div>
        
        <label for="age"> Age of Animal:</label>
        <div class="form-group">
           <div class="col-md-4 col-lg-4"> <input type="radio" name="age" value="infant" checked> Infant</div>
          <div class="col-md-4 col-lg-4">  <input type="radio" name="age" value="adult"> Adult</div>
        </div>
        <br>
        <label for="file"> Upload a photo:</label>
        <div class="form-group">
        <input type="file" name="file" />
        </div>
        <div class="form-group">
            <button name="btn-upload" class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
        </div>
    </fieldset>
</form>
                        	
                           		 
               		 </div>             
          	  	</div>
                           
          	  	</div>    

          	 </div>
        </div>
            
         

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
         
       
     
    
 
   
</body>

</html>





























