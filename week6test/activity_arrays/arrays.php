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

echo "<br>"."After modification"."<br>";

$provisionedActivities[1]= "hugs";
unset($provisionedActivities[2]);

foreach($provisionedActivities as $x){

    print "<p>$x</p>";
}


?>


</body>
</html>