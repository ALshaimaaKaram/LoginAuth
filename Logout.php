<?php
session_start();
if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
    unset($_SESSION["pass"]);
    session_regenerate_id();
    session_destroy();
    header("Location: Home.php");
}
else
{
    header("Location: Home.php");
}
?>