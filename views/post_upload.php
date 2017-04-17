

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
        
        <div class="form-group">
            <input type="radio" name="type" value="dog" checked> Dog<br>
            <input type="radio" name="type" value="cat"> Cat<br>
            <input type="radio" name="type" value="other"> Other
        </div>
        <div class="form-group">
            <input type="radio" name="sex" value="male" checked> Male<br>
            <input type="radio" name="sex" value="female"> Female<br>
            <input type="radio" name="sex" value="unknown"> Unknown
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="animal_name" placeholder="Animal Name" type="text"/>
        </div>
        <div class="form-group">
            <input type="radio" name="health" value="good" checked> Good<br>
            <input type="radio" name="health" value="bad"> Bad<br>
            <input type="radio" name="health" value="unknown"> Unknown
        </div>
        <div class="form-group">
            <input type="radio" name="age" value="infant" checked> Infant<br>
            <input type="radio" name="age" value="adult"> Adult<br>
        </div>
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