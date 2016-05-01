<?php
/**
 * Created by PhpStorm.
 * User: Dinesh
 * Date: 30/04/2016
 * Time: 20:21
 */


function getallbugsdetails(){

    $bugCategory = $_GET["bugCategory"];

    include("connection.php");

    $sql = "SELECT bugID FROM bugs WHERE bugCategory = $bugCategory";

    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    $result = mysqli_query($mysqli,$sql);

    $mysqli->close();

    return $result;
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



                <?php

                    $result = getallbugsdetails();

                    if(mysqli_num_rows($result)>0){

                        $counter = 0;

                        while ($row=  mysqli_fetch_array($result)) {

                            $counter++;
                ?>


                            <section class="title"> Bug Number:</section><?php echo $counter; ?>

                            <br><br>

                            <section class="title"> Bug Name:</section> <?php echo $row['bugName']; ?>

                            <br><br>

                            <section class="title"> Bug Category:</section> <?php echo $row['bugCategory']; ?>

                            <br><br>

                            <section class="title">Bug Summary:</section> <?php echo $row['bugSummary']; ?>

                            <br><br>
                            <hr>

                <?php

                        }//end of for loop
                    }//end if statement
                ?>


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
