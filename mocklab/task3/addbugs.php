<?php
/**
 * Created by PhpStorm.
 * User: Dinesh
 * Date: 30/04/2016
 * Time: 20:24
 */
?>


<!DOCTYPE html>
<html lang="en">
<!-- - [START OF HEAD] ============================================================================================= -->
<head>
    <meta charset="UTF-8">

    <title>Add Bugs</title>

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
        <section class="container-nav" id="nav-addbugs">

            <nav>
                <ul>
                    <li><a href="showBugs.php?bugCategory*">All Bug Items</a> </li>
                    <li><a href="showBugs.php?bugCategory=Android">Android Bugs</a> </li>
                    <li><a href="showBugs.php?bugCategory=iOS">iOS Bugs</a> </li>
                    <li><a href="showBugs.php?bugCategory=Windows">Windows Bugs</a> </li>
                    <li><a href="addbugs.php">Insert Bug</a> </li>
                </ul>

            </nav>

        </section>
        <!-- (END OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

        <section class="container-content" id="content-addbugs">

            <form>

                <label for="bugname">Bug Name</label>
                <input required type="text" id="bugname">
                <br>
                <label for="bugsummary">Bug Summary</label>
                <textarea required id="bugsummary"></textarea>
                <br>
                <label for="bugcategory">Bug Category</label>
                <input required type="text" id="bugcategory">
                <br>
                <br>
                <input type="submit" value="Submit" id="submit">

            </form>

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
