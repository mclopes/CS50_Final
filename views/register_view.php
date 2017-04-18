
<form action="../public/register.php" method="post">
<script>
    function showMe (box) {

    var chboxs = document.getElementsByName("is_shelter");
    var vis = "none";
    for(var i=0;i<chboxs.length;i++) { 
        if(chboxs[i].checked){
         vis = "block";
            break;
        }
    }
    document.getElementById(box).style.display = vis;
}
</script>

    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="user_name" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
        </div>
         <div class="form-group">
            <input class="form-control" name="email" placeholder="email" type="email"/>
        </div>
         <div class="form-group">
            <input class="form-control" name="is_shelter" onclick="showMe('shelter')" type="checkbox" id="is_shelter" value= <label for="is_shelter">Are you a shelter?</label>
        </div>
        <!--Shelter hidden div-->
        <div id="shelter" style="display:none;">
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="capacity"  type="number"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="availability"  type="number"/>
            </div>
            <div class="form-group">
                <input type="radio" name="type" value="dog" checked> Dog<br>
                <input type="radio" name="type" value="cat"> Cat<br>
                <input type="radio" name="type" value="mixed"> Mixed
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="address_number" placeholder="Number" type="text"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="address_street" placeholder="Street" type="text"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="address_city" placeholder="City" type="text"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="address_province" placeholder="Province" type="text"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="address_postal_code" placeholder="Postal Code" type="text"/>
            </div>            
        </div>
        <!--End Hidden Div-->
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
   or <a href="login_view.php">log in</a>
</div>

