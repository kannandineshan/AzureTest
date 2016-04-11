<?php
session_start();

$access_level = $_COOKIE['access_level'];
displayAccessLevelInformation($access_level);

function displayAccessLevelInformation($access_level) {
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "student") {
        echo "<p>You are currently logged in as a Student</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
?>