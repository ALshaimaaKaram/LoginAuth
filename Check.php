<?php
function CheckInfo($name,$password,$age,$city)
    {
        if(isset($_POST["login"]))
        {
            // if(!empty($_POST["name"])&&!empty($_POST["password"]))
            // {
                if(($name=="mohammed"&&$password==123456)||($name=="ali"&&$password==123456)){
                    $_SESSION["user"]=$name;
                    $_SESSION["pass"]=$password;
                    $_SESSION["age"]=$age;
                    $_SESSION["city"]=$city;
                    echo "<div id='form'>
                                <h1>Successful Login</h1>
                                <h2>Name:</h2>
                                <p>".htmlspecialchars($name)."</p>
                        
                                <h2>Age:</h2>
                                <p>".htmlspecialchars($age)."</p>

                                <h2>City:</h2>
                                <p>".htmlspecialchars($city)."</p>
                          </div>";  
                }
                else
                {
                    echo"<div>your username or password is wrong</div>";
                    header("Refresh: 4;URL= Home.php");
                }

            // }else{
            //     echo"<p>please enter login info</p>";
            //     // header("Refresh: 2;URL= Home.php");
            // }
        }
    }
?>
