<?php

include ("connection.php"); //Establishing connection with our database


if (empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
} else
{
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username = "dinesh"&& $password ="hello" )
    {
        setcookie('access_level','standarduser');
        header("location: homepage.php"); // Redirecting To another Page
    }
    elseif($username = "1510215"&& $password ="hello" )
    {
        setcookie('student','student');
        header("location: homepage"); // Redirecting To another Page
    }
    else
    {
        echo "Incorrect username or password.";
    }
}

?>
