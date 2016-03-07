<!DOCTYPE html>
<html>
<head>
</head>

<body>





<p>



    <form action="welcome.php" method="post">
         Enter object name: <input type="text" name="userinput"><br>
         <input type="submit">
    </form>



    <?php

    $specs = "specs";
    $mugs = "mugs";
    $sausagerolls = "sausagerolls";

    switch(userinput){

        case 'specs':
        case 'Specs':
        case 'SPECS':
            echo "You have to be 18 to buy mugs";
            break;
    }








    ?>




</p>














</body>

</html>
