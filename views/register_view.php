
<form action="../public/register.php" method="post">

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
            <input class="form-control" name="is_shelter" type="checkbox" id="is_shelter" value= <label for="is_shelter">Are you a shelter?</label>
        </div>
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
