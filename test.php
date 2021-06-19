<?php
session_start();
var_dump($_POST);
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
            header("Refresh:5;URL=Home.php?errors=".$urlerror);
        }
        else{
            // header("Refresh:5;URL=Home.php?");

            // echo "Welcome: $name you lived in $city, Age is $age";
            if($_SESSION["user"] === "mohammed"||$_SESSION["user"] === "ali")
            {
                header("Location:pro.php");
            }
        }
    }
    else
    {
        echo"you are not authorized to be here";
        header("Refresh:5;URL=Home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        img
        {
            width:100px;
            height: 100px;
            border-radius:100%;
        }
        div
        {
            margin: 50px;
            padding: 30px;
            width: 85%;
            font-size:20px;
            color: white;
            background-color:darkgoldenrod;
            border: black 2px solid;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body>
    <div class="container" style="width:50%;">
        <div>
            <h2>Name:</h2>
            <p><?=htmlspecialchars($_POST["name"])?></p>
      
            <h2>Age:</h2>
            <p><?=htmlspecialchars($_POST["age"])?></p>

            <h2>City:</h2>
            <p>
            <?=htmlspecialchars($_POST["city"])?>
            </p>    
        </div>
    </div>
</body>
</html>

