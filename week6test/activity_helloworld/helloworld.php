<!DOCTYPE html>
<html>

<head></head>

<body>

<p>

<?php

echo "hello world";

echo "<br>";

echo "hello," ." ". "world" ."!";

echo "<br>";

$myname= Dinesh;
$myid = 15101215;

echo "Name: ".$myname."<br>"."Student ID: ".$myid."<br>";

?>

<form action="helloworld.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" required><br>
    <label for="id">Student ID:</label><br>
    <input type="number" name="id" required><br>
    <input type="submit" value="SUBMIT"><br>
</form>


<?php
$name = $_POST['name'];

if ($name==dinesh){
echo "Hello Dinesh !!!";
}
else{
print "Get the F out of here ??!!";
}
?>

</p>


</body>

</html>