<!DOCTYPE html>
<html>
<header></header>





<body>


<form action="comparisons.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="age">Age:</label><br>
    <input type="number" name="age"><br>
    <input type="submit"><br>
</form>

<?php

$name=$_POST['name'];
$age=$_POST['age'];

if($age>=21) {
    echo $name . "<br>" . "You are allowed to buy sausage rolls"."<br>";
}

elseif($age>=18) {
    echo $name . "<br>" . "You are allowed to buy mugs". "<br>";
}

if($age>=16) {
    echo $name . "<br>" . "You are allowed to buy specs". "<br>";
}

else{
    echo $name.""."you are under age";
}

?>



</body>

</html>



