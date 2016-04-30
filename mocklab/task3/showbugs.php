<?php
/**
 * Created by PhpStorm.
 * User: Dinesh
 * Date: 30/04/2016
 * Time: 20:21
 */


function getbugsname(){

    include("connection.php");

    $sql = "SELECT bugName FROM bugs";  //query for getting name

    $result = mysqli_query($db,$sql);

    $row = $result->fetch_array();

    $bugname = $row['bugName'];

    echo " {$bugname}";   //the function prints the name with a space before and an exclamation mark after it
}

function getbugscategory(){

    include("connection.php");

    $sql = "SELECT bugCategory FROM bugs";  //query for getting name

    $result = mysqli_query($db,$sql);

    $row = $result->fetch_array();

    $bugCategory = $row['bugCategory'];


    echo " {$bugCategory}";   //the function prints the name with a space before and an exclamation mark after it
}

function getbugssummary(){

    include("connection.php");

    $sql = "SELECT bugSummary FROM bugs";  //query for getting name

    $result = mysqli_query($db,$sql);

    $row = $result->fetch_array();

    $bugSummary = $row['bugSummary'];

    echo " {$bugSummary}";   //the function prints the name with a space before and an exclamation mark after it
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Show Bugs</title>

    <!-- - CSS Stylesheet- -->
    <link rel="stylesheet" href="assests/css.css" type="text/css">

</head>
<!-- - [END OF HEAD] ============================================================================================= -->


<!-- - [START OF BODY] ============================================================================================= -->
<body>

<!-- (START OF HEADER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<header>
    <section class="container" id="head">

        <section class="headercontainer"><img id="logo" src="assests/images/logo.png"></section>
        <section class="headercontainer">
            <h1>BugTracker</h1>
            <h3>Keeping track of all the pesky little bugs</h3>
        </section>

    </section>
</header>
<!-- (END OF HEADER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


<!-- (START OF MAIN) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<main>

    <section class="container" id="main">


        <!-- (START OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <section class="container-nav" id="nav-showbugs">

            <nav>
                <ul>
                    <li><a href="showbugs.php">All Bug Items</a> </li>
                    <li><a href="showbugs.php">Android Bugs</a> </li>
                    <li><a href="showbugs.php">iOS Bugs</a> </li>
                    <li><a href="showbugs.php">Windows Bugs</a> </li>
                    <li><a href="addbugs.php">Insert Bug</a> </li>
                </ul>

            </nav>

        </section>
        <!-- (END OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


        <section class="container-content" id="content-showbugs">

            <div class="showbugs">

                <div class="title"> Bug Name: <?php getbugsname();?></div>
                <br>
                <div class="category"> Bug Category: <?php getbugscategory();?></div>
                <br>
                <div class="summary">Bug Summary:<br> <?php getbugssummary();?></div>

            </div>
        <hr>
            <div class="showbugs">

                <?php getbugsname();?>

            </div>

        </section>


    </section>
</main>
<!-- (END OF MAIN) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<!-- (START OF FOOTER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<footer>

    <section class="container" id="footer">

        <p>
            Designed by [Dineshan Kannan 2016]
        </p>

    </section>

</footer>
<!-- (END OF FOOTER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

</body>
<!-- - [END OF BODY] ============================================================================================= -->
</html>
