
<?php
    include("header.php");
    include ("Menu.php");
    session_start();

    if(isset($_GET["errors"]))
    {
        $errors = unserialize($_GET["errors"]);
    }

    //Session
    if(isset($_SESSION["name"])){
            echo "you are already logged in";
            include ("ContactUs.php");
    }else
    {?>

    <div class="container">
        <form action="profile.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name">
                <span style="color:red;">
                    <?= 
                        (isset($errors["name"]))?$errors["name"]:""; 
                    ?>
                </span>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password">
                <span style="color:red;">
                    <?= 
                        (isset($errors["password"]))?$errors["password"]:""; 
                    ?>
                </span>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input class="form-control" type="number" id="age" name="age">
                <span style="color:red;">
                    <?= 
                        (isset($errors["age"]))?$errors["age"]:""; 
                    ?>
                </span>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <select name="city" class="form-control" id="city">
                    <option value="0"></option>
                    <option value="Sohag">Sohag</option>
                    <option value="Assuit">Assuit</option>
                    <option value="Cairo">Cairo</option>
                </select>
                <span style="color:red;">
                    <?= 
                        (isset($errors["city"]))?$errors["city"]:""; 
                    ?>
                </span>
            </div>

            <div class="form-group">
                <input class="btn btn-info" type="reset" value="Cancel">
                <input class="btn btn-primary" name="login" type="submit" value="Submit">
            </div>
        </form>
    </div>

    <?php 
    } 
include("footer.php");
?>