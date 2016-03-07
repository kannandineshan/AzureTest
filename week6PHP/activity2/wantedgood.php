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



switch($_POST['userinput']){

case 'specs':
case 'Specs':
case 'SPECS':
echo "You have to be 18 to buy mugs";
break;

default:
echo "Wrong Value";
}


?>





</p>














</body>

</html>
