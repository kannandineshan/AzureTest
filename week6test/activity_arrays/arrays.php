<!DOCTYPE html>
<html lang="en">
<head>
</head>


<body>

<?php


$provisionedActivities = array("Specs","Mugs","Sausage rolls");


foreach($provisionedActivities as $x){

    print "<p>$x</p>";
}

$provisionedActivities[1]= "hugs";
unset($provisionedActivities[2]);


?>


</body>
</html>