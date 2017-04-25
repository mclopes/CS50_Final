<html lang="en">

    <head>
        <?php
// configuration
include("../includes/header.php"); 
?>
    </head>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1">
                    <div class="post-preview">
                        <h2 class="post-title">
                            Log In
                        </h2>
                        <form action="../public/login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input
                                        autocomplete="off"
                                        autofocus="autofocus"
                                        class="form-control"
                                        name="user_name"
                                        placeholder="Username"
                                        type="text"/>
                                </div>
                                <div class="form-group">
                                    <input
                                        class="form-control"
                                        name="password"
                                        placeholder="Password"
                                        type="password"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default" type="submit">
                                        <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                        Log In
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-1  col-md-4 col-md-offset-1">
                    <div class="post-preview">
                        <h2 class="post-title">
                            Register
                        </h2>
                        <form action="../public/register.php" method="post">
                            <script>
                                function showMe(box) {

                                    var chboxs = document.getElementsByName("is_shelter");
                                    var vis = "none";
                                    for (var i = 0; i < chboxs.length; i++) {
                                        if (chboxs[i].checked) {
                                            vis = "block";
                                            break;
                                        }
                                    }
                                    document
                                        .getElementById(box)
                                        .style
                                        .display = vis;
                                }
                            </script>

                            <fieldset>
                                <div class="form-group">
                                    <input
                                        autocomplete="off"
                                        autofocus="autofocus"
                                        class="form-control"
                                        name="user_name"
                                        placeholder="Username"
                                        type="text"/>
                                </div>
                                <div class="form-group">
                                    <input
                                        class="form-control"
                                        name="password"
                                        placeholder="Password"
                                        type="password"/>
                                </div>
                                <div class="form-group">
                                    <input
                                        class="form-control"
                                        name="confirmation"
                                        placeholder="Confirm Password"
                                        type="password"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="email" type="email"/>
                                </div>
                                <div class="form-group">
                                    <input
                                        autocomplete="off"
                                        autofocus="autofocus"
                                        class="form-control"
                                        name="phone"
                                        placeholder="Phone"
                                        type="text"/>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-7  col-md-7 ">
                                        <label for="is_shelter">Are you a shelter?</label>
                                    </div>
                                    <div class="col-lg-2  col-md-2 ">
                                        <input
                                            class="form-control"
                                            name="is_shelter"
                                            onclick="showMe('shelter')"
                                            type="checkbox"
                                            id="is_shelter"/></div>
                                </div>
                                <!--Shelter hidden div-->
                                <br>
                                <div id="shelter" style="display:none;">
                                    <br>
                                    <label for="capacity">
                                        Capacity:</label>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="capacity"
                                            type="number"/>
                                    </div>
                                    <label for="availability">
                                        Availability:</label>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="availability"
                                            type="number"/>
                                    </div>
                                    <label for="type">
                                        Type of Shelter:</label>
                                    <div class="form-group">

                                        <div class="col-md-4 col-lg-4">
                                            <input type="radio" name="type" value="dog" checked="checked">
                                            Dog</div>
                                        <div class="col-md-4 col-lg-4">
                                            <input class="col-md-4 col-lg-4" type="radio" name="type" value="cat">
                                            Cat</div>
                                        <div class="col-md-4 col-lg-4">
                                            <input class="col-md-4 col-lg-4" type="radio" name="type" value="mixed">
                                            Mixed
                                        </div><br>
                                    </div>
                                    <label for="address_number">
                                        Address</label>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="address_number"
                                            placeholder="Number"
                                            type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="address_street"
                                            placeholder="Street"
                                            type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="address_city"
                                            placeholder="City"
                                            type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="address_province"
                                            placeholder="Province"
                                            type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            autocomplete="off"
                                            autofocus="autofocus"
                                            class="form-control"
                                            name="address_postal_code"
                                            placeholder="Postal Code"
                                            type="text"/>
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
                    </div>
                </div>

            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </body>

</html>