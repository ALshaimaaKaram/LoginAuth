<?php
session_start();
include("header.php");
include ("Menu.php");

if(empty($_SESSION["user"])&&empty($_SESSION["pass"]))
{
    echo"<div style='background-color:darkgoldenrod; hight:150px;'>
    You are not authorized to be here</div>";
    header("Refresh:5;URL=Home.php");
}
else
{
   
?>

    <form action="profile.php" method="get">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="msg">Massege:</label>
            <textarea class="form-control" type="text" id="msg" name="msg"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-info" type="reset" value="Cancel">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </form>  

<?php
}
    include("footer.php");
?>