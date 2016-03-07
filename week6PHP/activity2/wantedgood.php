<!DOCTYPE html>
<html>
<head>
</head>

<body>





<p>



    <form action="" method="post">
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
    echo "You have to be 18 to buy Specs";
    break;

    case 'mugs':
    case 'Mugs':
    case 'MUGS':
    echo "You have to be 18 to buy Mugs";
    break;

    case 'sausage rolls':
    case 'Sausage rolls':
    case 'SAUSAGE ROLLS':
        echo "You have to be 18 to buy Mugs";
        break;

    default:
    echo "Wrong Value";

}


?>





</p>














</body>

</html>
