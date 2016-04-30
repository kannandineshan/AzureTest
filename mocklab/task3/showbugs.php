<?php
/**
 * Created by PhpStorm.
 * User: Dinesh
 * Date: 30/04/2016
 * Time: 20:21
 */


function getbugs(){

    include("connection.php");

    $sql = "SELECT * FROM bugs";  //query for getting name

    $result = mysqli_query($db,$sql);

    echo " {$sql}";   //the function prints the name with a space before and an exclamation mark after it
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

                <div class="title"> Bug Name: StageFright</div>
                <br>
                <div class="category"> Bug Category: Android</div>
                <br>
                <div class="summary">
                    Bug Summary: Stagefright is the collective name for a group of software bugs,
                    that affect versions 2.2 and newer of the Android operating system, allowing an attacker to perform
                    arbitrary operations on the victim device through remote code execution and privilege escalation.
                </div>

            </div>
        <hr>
            <div class="showbugs">

                <?php getbugs();?>

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
