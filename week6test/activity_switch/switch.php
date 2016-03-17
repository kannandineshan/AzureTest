<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>









<form action="switch.php" method="post">
    <label for="good">Enter Wanted Good:</label>
    <input type="text" name="good">
    <input type="submit">
</form>








<?php

$wantedgood=$_POST['good'];

switch($wantedgood){
    case 'specs':
    case 'Specs':
    case 'SPECS':
        echo "<br>"."You have to be 16 or over to buy Specs";
        break;
    case 'mugs':
    case 'Mugs':
    case 'MUGS':
        echo "<br>"."You have to be 18 or over to buy Mugs";
        break;
    case 'sausage rolls':
    case 'Sausage rolls':
    case 'SAUSAGE ROLLS':
        echo "<br>"."You have to be 18 or over to buy Sausage Rolls";
        break;
}


?>


</body>
</html>