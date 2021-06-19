<?php

    include("header.php");
    include ("Menu.php");
    include("Check.php");

    session_start();
    // (isset($_POST))
    
    if(isset($_POST["name"])&&isset($_POST["age"])&&isset($_POST["password"])&&isset($_POST["city"]))
    {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $password = $_POST["password"];
        $city = $_POST["city"];

        (empty($name))?$errors["name"]="Please Enter Name":"";
        (empty($age))?$errors["age"]="Please Enter Age":"";
        (empty($password))?$errors["password"]="Please Enter Password":"";
        (empty($city))?$errors["city"]="Please Enter City":"";

        if(isset($errors)){
            $urlerror = urldecode(serialize($errors));
            // header("Refresh:5;URL=Home.php?errors=".$urlerror);
            header("Location:Home.php?errors=".$urlerror);
        }
        else{
            CheckInfo($name,$password,$age,$city);
        }

    }
    else
    {
        if(empty($_SESSION["user"])&&empty($_SESSION["pass"]))
        {
            echo"<div style='background-color:darkgoldenrod; hight:150px;'>
            You are not authorized to be here</div>";
            header("Refresh:5;URL=Home.php");
        }
        else
        {
            echo "<div id='form'>
                <h1>Successful Login</h1>
                <h2>Name:</h2>
                <p>".htmlspecialchars($_SESSION["user"])."</p>
        
                <h2>Age:</h2>
                <p>".htmlspecialchars($_SESSION["age"])."</p>

                <h2>City:</h2>
                <p>".htmlspecialchars($_SESSION["city"])."</p>
            </div>";  
        }
    }

    include("footer.php");
?>
