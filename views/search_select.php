<html lang="en">

    <head>
        <?php
// configuration
include("../includes/header.php"); 
?>
    </head>

<div class="col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-6">
                            <form
                            action="../public/search.php"
                            method="post">
                            
                            <label for="type">
                                Type of Animal:</label>
                            <div class="form-group">
                                <div class="col-md-3 col-lg-3">
                                    <input type="radio" name="type" value="dog">
                                    Dog</div>
                                <div class="col-md-3 col-lg-3">
                                    <input class="col-md-4 col-lg-4" type="radio" name="type" value="cat">
                                    Cat</div>
                                    <div class="col-md-3 col-lg-3">
                                    <input class="col-md-4 col-lg-4" type="radio" name="type" value="other">
                                    Other</div>
                                <div class="col-md-3 col-lg-3">
                                <br>
                            </div>
                            <label for="sex">
                                Sex of Animal:</label>
                            <div class="form-group">
                                <div class="col-md-4 col-lg-2"><input type="radio" name="sex" value="male">
                                    M</div>
                                <div class="col-md-4 col-lg-2"><input type="radio" name="sex" value="female">
                                    F</div>
                                    <br>
                            </div>
                            
                            <label for="health">
                                Health of Animal:</label>
                            <div class="form-group">
                                <div class="col-md-4 col-lg-3"><input type="radio" name="health" value="good">
                                    Good</div>
                                <div class="col-md-4 col-lg-2"><input type="radio" name="health" value="bad">
                                    Bad</div>
                                    <br>
                            </div>

                            <label for="age">
                                Age of Animal:</label>
                            <div class="form-group">
                                <div class="col-md-4 col-lg-4">
                                    <input type="radio" name="age" value="infant">
                                    Infant</div>
                                <div class="col-md-4 col-lg-4">
                                    <input type="radio" name="age" value="adult">
                                    Adult</div>
                                <div class="col-md-4 col-lg-4">
                                
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <button name="btn-upload" class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                    Search
                                </button>
                            </div>
                        </fieldset>
                    </form>
                    </div>

<br><br><br><br><br><br><br><br><br>
                    

</body>