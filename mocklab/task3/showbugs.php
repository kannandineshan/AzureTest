<?php

include("assets/PHP/PHPfunctions.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Show Bugs</title>

    <!-- - CSS Stylesheet- -->
    <link rel="stylesheet" href="assets/CSS/css.css" type="text/css">

</head>
<!-- - [END OF HEAD] ============================================================================================= -->


<!-- - [START OF BODY] ============================================================================================= -->
<body>

<!-- (START OF HEADER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<header>
    <section class="container" id="head">

        <?php

        include("assets/HTML/header.php");

        ?>

    </section>
</header>
<!-- (END OF HEADER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


<!-- (START OF MAIN) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<main>

    <section class="container" id="main">


        <!-- (START OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <section class="container-nav" id="nav-showbugs">

            <?php

            include("assets/HTML/navigation.php");

            ?>

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

        <?php

        include("assets/HTML/footer.php");

        ?>

    </section>

</footer>
<!-- (END OF FOOTER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

</body>
<!-- - [END OF BODY] ============================================================================================= -->
</html>
