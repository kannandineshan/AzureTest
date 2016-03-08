<!DOCTYPE html>
<html>
<head>
</head>

<body>





<p>



    <form action="" method="post">
        <label for="userinput"> Enter object name:</label>
        <input type="text" name="userinput"><br>
         <input type="submit">
    </form>



<?php




switch($_POST['userinput']){

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
