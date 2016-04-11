<?php

include ("connection.php"); //Establishing connection with our database

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
} elseif ($username = "dinesh"&& $password ="hello" )
    {
        setcookie('access_level','standarduser');
        header("location: homepage.php"); // Redirecting To another Page
    }
    elseif($username = "1510215"&& $password ="hello" )
    {
        setcookie('access_level','student');
        header("location: homepage"); // Redirecting To another Page
    }
    else
    {
        echo "Incorrect username or password.";
    }


?>
